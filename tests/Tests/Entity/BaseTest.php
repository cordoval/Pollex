<?php

namespace Tests\Entity;

use Pollex\Entity as Entity;
use Tests as Base;

class BaseTest extends \Tests\TestCase
{
    /** @var Fake */
    protected $_entity;

    public function setUp()
    {
        $this->_entity = new Fake();
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
        $this->assertEquals(1, $this->_entity->getId());
    }

    public function testType()
    {
        $this->assertEquals('fake', $this->_entity->getEntityType());
    }

    public function testUrl()
    {
        $this->_entity->setId(1);
        $this->assertEquals('/fakes/1', $this->_entity->getUrl());
    }

    public function testGetUrlParts()
    {
        $this->_entity->setId(1);
        $this->assertEquals(array('fakes', 1), $this->_entity->getUrlParts());
    }
}

/** This exists only to test abstract class */
class Fake extends \Pollex\Entity\Base {
}