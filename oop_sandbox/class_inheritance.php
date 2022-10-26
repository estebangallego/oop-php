<?php

class User {

  var string $first_name;
  var string $last_name;
  var string $username;

  function full_name(): string
  {
    return $this->first_name . " " . $this->last_name;
  }

}

class Customer extends User {
  var string $city;
  var string $state;
  var string $country;

  function location(): string
  {
      return $this->city . ", " . $this->state . ", " . $this->country . ", ";
  }
}

class AdminUser extends User {
    var bool $is_admin = true;

    function full_name(): string
    {
        return $this->first_name . " " . $this->last_name . " (Admin)";
    }
}

$u = new User;
$u->first_name = 'Esteban';
$u->last_name = 'Gallego';
$u->username = 'egallego';
$u->is_admin = true;


$c = new Customer;
$c->first_name = 'Diana';
$c->last_name = 'Arevalo';
$c->username = 'darevalo';
$c->city = 'Los Angeles';
$c->state = 'California';
$c->country = 'United States';
$c->is_admin = true;


echo $u->full_name() . '<br />';
//echo $u->location() . '<br />'; no method error

echo $c->full_name() . '<br />';
echo $c->location() . '<br />';

echo get_parent_class($u) . '<br >';
echo get_parent_class($c) . '<br >';

if (is_subclass_of($c, 'User')) {
  echo "Instance is a subclass of User" . '<br />';
}

$parents = class_parents($c);
echo implode(',', $parents) . '<br />';