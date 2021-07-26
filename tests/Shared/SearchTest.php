<?php

use PHPUnit\Framework\TestCase;
use Utils\Search;

class SearchTest extends TestCase
{
    private array $arr_init = [];
    private array $arr_exist = [];

    protected function setUp(): void {
        $this->arr_init = [];
        $this->arr_init[0] = ["h" => 1, "w" => 1];
        $this->arr_init[1] = ["h" => 3, "w" => 5];
        $this->arr_init[2] = ["h" => 2, "w" => 6];
        $this->arr_exist = [];
        $this->arr_exist[0] = ["h" => 1, "w" => 1];
    }

    public function testExistingArray(){
        $this->setUp();
        $result = Search::multi_array_search($this->arr_init, $this->arr_exist);
        self::assertIsArray($result);
    }

}