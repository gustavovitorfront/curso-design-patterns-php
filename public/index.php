<?php

use Core\Creational\Builder\Practical\Address;
use Core\Creational\Builder\Practical\Enums\Role;
use Core\Creational\Builder\Practical\Phone;
use Core\Creational\Builder\Practical\User;

use Core\Creational\Builder\Practical\UserBuilder;
use Core\Creational\Singleton\Practical\DbConnection;
use Core\Creational\Singleton\Conceptual\Singleton;

require_once '../vendor/autoload.php';

$founder = new User(
    firstName: 'Gustavo',
    lastName: 'Vitor',
    email: 'gustavo.vitor@redbelt.com.br',
    age: 21,
    role: Role::F,
);
$founder->setAddress(
    new Address(
        street: 'Rua 123',
        city: 'City 123',
        state: 'State 123',
        postalCode: 1234567,
        country: 'BR',
    )
);
$founder->setPhone(
    new Phone(
        ddd: 19,
        number: 997705920,
    )
);
$user = (new UserBuilder)
    ->addBasicInfo(
        firstName: 'Gustavo',
        lastName: 'Vitor',
        email: 'gustavo.vitor@redbelt.com.br',
        age: 21,
        role: Role::F,
    )
    ->addAddress(
        street: '213',
        city: '412',
        state: '213',
        postalCode: 123213,
        country: 'BR',
    )
    ->addPhone(
        ddd: 19,
        number: 997705920,
    )
    ->build();

/**
 * Singleton Conceitual
 */


$instance = DbConnection::getInstance();
// DbConnection::getInstance();
// DbConnection::getInstance();
// DbConnection::getInstance();
// DbConnection::getInstance();
// DbConnection::getInstance();
$instanceA = Singleton::getInstance();
$instanceB = Singleton::getInstance();
var_dump($instanceA === $instanceB);

DbConnection::getConnection();
DbConnection::getConnection();
DbConnection::getConnection();
DbConnection::getConnection();
DbConnection::getConnection();
DbConnection::getConnection();
