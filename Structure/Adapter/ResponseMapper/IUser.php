<?php


namespace Structure\Adapter\ResponseMapper;


interface IUser
{
    public function getId(): string;
    public function getName(): string;
    public function getAddress(): string;
}