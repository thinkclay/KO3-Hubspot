# Hubspot Module for Kohana 3.x
[![Build Status](https://drone.io/github.com/thinkclay/KO3-Hubspot/status.png)](https://drone.io/github.com/thinkclay/KO3-Hubspot/latest)

A simple wrapper for the HaPiHP SDK provided by hubspot. Initial release needs LOTS of work still.

## Installation
Add the folder in your modules, add the module in your bootstrap, and the copy/modify the hubspot config with your API key.

## Examples
```php
Hubspot::factory('Contacts')->create_contact([
    'firstname'     => $post['first_name'],
    'lastname'      => $post['last_name'],
    'email'         => $post['email'],
    'role'          => 'client_lead',
    'lifecyclestage'=> 'lead'
]);
```
