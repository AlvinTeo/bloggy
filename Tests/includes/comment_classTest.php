<?php

/**
 * Generated by PHPUnit_SkeletonGenerator on 2017-05-01 at 19:32:30.
 */
require_once '../includes/comment_class.php';
class comment_classTest extends PHPUnit_Framework_TestCase {

    /**
     * @var comment_class
     */
    private $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new comment_class(1,"hello","2017-04-30 22:31:35",1,1);
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        unset($this->object);
    }

    /**
     * @covers comment_class::getComment_id
     * @todo   Implement testGetComment_id().
     */
    public function testGetComment_id() {
        $this->assertEquals(1,$this->object->getComment_id());
    }

    /**
     * @covers comment_class::getComment_text
     * @todo   Implement testGetComment_text().
     */
    public function testGetComment_text() {
        $this->assertEquals("hello",$this->object->getComment_text());
    }

    /**
     * @covers comment_class::getComment_date
     * @todo   Implement testGetComment_date().
     */
    public function testGetComment_date() {
        $this->assertEquals("2017-04-30 22:31:35",$this->object->getComment_date());
    }

    /**
     * @covers comment_class::getMember_id
     * @todo   Implement testGetMember_id().
     */
    public function testGetMember_id() {
        $this->assertEquals(1,$this->object->getMember_id());
    }

    /**
     * @covers comment_class::getPost_id
     * @todo   Implement testGetPost_id().
     */
    public function testGetPost_id() {
        $this->assertEquals(1,$this->object->getPost_id());    }

    /**
     * @covers comment_class::setComment_id
     * @todo   Implement testSetComment_id().
     */
    public function testSetComment_id() {
        $this->object->setComment_id(1);
        $this->assertEquals(1, $this->object->getComment_id());
    }

    /**
     * @covers comment_class::setComment_text
     * @todo   Implement testSetComment_text().
     */
    public function testSetComment_text() {
        $this->object->setComment_text("hello");
        $this->assertEquals("hello", $this->object->getComment_text());
    }

    /**
     * @covers comment_class::setComment_date
     * @todo   Implement testSetComment_date().
     */
    public function testSetComment_date() {
        $this->object->setComment_date("2017-04-30 22:31:35");
        $this->assertEquals("2017-04-30 22:31:35", $this->object->getComment_date());
    }

    /**
     * @covers comment_class::setMember_id
     * @todo   Implement testSetMember_id().
     */
    public function testSetMember_id() {
        $this->object->setMember_id(1);
        $this->assertEquals(1, $this->object->getMember_id());
    }

    /**
     * @covers comment_class::setPost_id
     * @todo   Implement testSetPost_id().
     */
    public function testSetPost_id() {
        $this->object->setPost_id(1);
        $this->assertEquals(1, $this->object->getPost_id());
    }

}
