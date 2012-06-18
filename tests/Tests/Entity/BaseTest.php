<?php

namespace Tests\Entity;

use Pollex\Entity as Entity;
use Tests as Base;

class BaseTest extends \Tests\TestCase
{
    /** @var FakeBase */
    protected $_entity;

    public function setUp()
    {
        $this->_entity = new FakeBase();
    }

    public function testCreatedTime()
    {
        $this->assertInstanceOf(
            'DateTime',
            $this->_entity->getCreated()
        );
    }

    public function testUpdatesTime()
    {
        $this->_entity->createUpdateDateTime();
        $this->assertInstanceOf(
            'DateTime',
            $this->_entity->getUpdated()
        );
    }

    public function testId()
    {
        $this->_entity->setId(1);
        $this->assertEquals(1, $this->_entity->getid());
    }
}

/** This exists only to test abstract class */
class FakeBase extends \Pollex\Entity\Base {}