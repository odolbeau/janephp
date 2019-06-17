<?php

namespace Jane\JsonSchema\Tests\Expected\Model;

class TestSubObject
{
    /**
     * 
     *
     * @var string
     */
    protected $foo = 'subContent';
    /**
     * 
     *
     * @return string
     */
    public function getFoo() : string
    {
        return $this->foo;
    }
    /**
     * 
     *
     * @param string $foo
     *
     * @return self
     */
    public function setFoo(string $foo) : self
    {
        $this->foo = $foo;
        return $this;
    }
}