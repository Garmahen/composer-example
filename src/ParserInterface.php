<?php
namespace garmahen\parser;

interface ParserInterface
{
	public function procces(string $url, string $tag): array;
}

?>
