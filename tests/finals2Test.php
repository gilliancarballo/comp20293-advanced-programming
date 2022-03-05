<?php
require_once __DIR__ . '/../src/finals2.php';

class finals2Test extends \PHPUnit\Framework\TestCase
{
    public function testGetName() //1st test case
    {
        $simple2 = new finals2();
        $simple2->setName('Gillian');
        $this->assertEquals($simple2->getName(), 'Gillian');
    }

    public function testGetAge()
    {
        $simple2 = new finals2();
        $simple2->setAge(20);
        $this->assertEquals($simple2->getAge(), 20);
    }

    public function testFaveColor()
    {
        $simple2 = new finals2();
        $simple2->setFaveColor('Violet');
        $this->assertEquals($simple2->getFaveColor(), 'Violet');
    }

    public function testGetNameCheckString()
    {
        $simple2 = new finals2();
        $simple2 ->setName('Gillian');
        $this->assertIsString($simple2->getName(), 'Gillian');
    }

    public function testGetAgeCheckInt()
    {
        $simple2 = new finals2();
        $simple2->setAge(20);
        $this->assertIsInt($simple2->getAge(), 20);
    }

    public function testGetAgeCheckNumeric()
    {
        $simple2 = new finals2();
        $simple2->setAge(20);
        $this->assertIsNumeric($simple2->getAge(), 20);
    }
    
    public function testFaveColorCheckString()
    {
        $simple2 = new finals2();
        $simple2->setFaveColor('Violet');
        $this->assertIsString($simple2->getFaveColor(), 'Violet');
    }

    public function testGetTogetherInput()
    {
        $simple2 = new finals2();
        $simple2->setTogetherInput('Gillian', 20, 'Violet');
        $this->assertEquals($simple2->getTogetherInput(), 'Gillian', 20, 'Violet');
    }

}