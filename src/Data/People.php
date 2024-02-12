<?php

namespace ProgrammerZamanNow\Data;

class People
{
      public function __construct(private string $name)
      {
      }

      public function sayHello(string $name): string
      {
            return "Hello $this->name";
      }
}
