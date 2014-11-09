<?php

namespace Xi\RandomString\Tests;

use Xi\RandomString\RandomStringGenerator;

class RandomStringGeneratorTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @return array
     */
    public function provideCharLists()
    {
        return [
            ['abcdefg'],
            ['%&)'],
            ['abcdefghijklmnopqr'],
            ['1234567890'],
        ];
    }

    /**
     * @test
     * @dataProvider provideCharLists
     */
    public function generatedStringsShouldBeOfDefinedLengthAndContainCorrectCharactersOnly($charlist)
    {
        $length = rand(10, 20);

        $generator = new RandomStringGenerator($charlist);

        $random = $generator->generate($length);

        $this->assertEquals($length, strlen($random));

        $random = str_split($random);

        $charlist = str_split($charlist);

        foreach ($random as $char) {
            $this->assertContains($char, $charlist);
        }
    }

}
