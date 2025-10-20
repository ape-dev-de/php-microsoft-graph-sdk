# Microsoft Graph SDK for PHP

A production-ready PHP SDK for Microsoft Graph API, automatically generated from OpenAPI specifications with strict type-safe DTOs and request builder architecture.

## Features

- ✅ **Request Builder Architecture** - Fluent, chainable API calls
- ✅ **Strict Type-Safe DTOs** - Full property validation and type hints
- ✅ **PSR-7/PSR-18 Compliant** - Standard HTTP client integration
- ✅ **Multiple Authentication Methods** - Bearer token and Client Credentials flow
- ✅ **Auto-generated from OpenAPI** - Always up-to-date with Microsoft Graph API
- ✅ **Symfony Serializer** - Robust request/response handling

## Installation

```bash
composer install
```

## Generate SDK

Run the generator script to download the OpenAPI spec and generate the SDK:

```bash
php generate.php
```

This will:
1. Download the latest Microsoft Graph OpenAPI specification
2. Generate strict DTOs and models
3. Create request builder classes
4. Set up authentication providers
5. Format all code with PHP CS Fixer

## Usage

### Basic Setup with Bearer Token

```php
<?php

use ApeDevDe\MicrosoftGraphSdk\GraphServiceClient;
use ApeDevDe\MicrosoftGraphSdk\Authentication\BearerTokenAuthenticationProvider;
use Symfony\Component\HttpClient\Psr18Client;
use Nyholm\Psr7\Factory\Psr17Factory;

// Create HTTP client and factories
$httpClient = new Psr18Client();
$psr17Factory = new Psr17Factory();

// Create authentication provider
$authProvider = new BearerTokenAuthenticationProvider('YOUR_ACCESS_TOKEN');

// Create Graph client
$graphClient = GraphServiceClient::create(
    $httpClient,
    $psr17Factory,
    $psr17Factory,
    $authProvider
);

// Use the SDK
$user = $graphClient->me()->get();
echo "Hello, " . $user->getDisplayName();
```

### Client Credentials Flow

```php
<?php

use ApeDevDe\MicrosoftGraphSdk\GraphServiceClient;
use ApeDevDe\MicrosoftGraphSdk\Authentication\ClientCredentialsAuthenticationProvider;
use Symfony\Component\HttpClient\Psr18Client;
use Nyholm\Psr7\Factory\Psr17Factory;

$httpClient = new Psr18Client();
$psr17Factory = new Psr17Factory();

$authProvider = new ClientCredentialsAuthenticationProvider(
    'YOUR_TENANT_ID',
    'YOUR_CLIENT_ID',
    'YOUR_CLIENT_SECRET',
    $httpClient,
    $psr17Factory,
    $psr17Factory
);

$graphClient = GraphServiceClient::create(
    $httpClient,
    $psr17Factory,
    $psr17Factory,
    $authProvider
);
```

### Examples

#### Get Current User

```php
$me = $graphClient->me()->get();
echo $me->getDisplayName();
echo $me->getMail();
```

#### List Users

```php
$users = $graphClient->users()->get();
foreach ($users->getValue() as $user) {
    echo $user->getDisplayName() . "\n";
}
```

#### Get Specific User

```php
$user = $graphClient->users()->byId('user-id')->get();
echo $user->getDisplayName();
```

#### Create User

```php
use ApeDevDe\MicrosoftGraphSdk\Models\User;

$newUser = new User();
$newUser->setDisplayName('John Doe');
$newUser->setUserPrincipalName('john.doe@contoso.com');
$newUser->setMailNickname('johndoe');
$newUser->setAccountEnabled(true);

$createdUser = $graphClient->users()->post($newUser);
```

#### Update User

```php
$user = $graphClient->users()->byId('user-id')->get();
$user->setJobTitle('Senior Developer');

$updatedUser = $graphClient->users()->byId('user-id')->patch($user);
```

#### Delete User

```php
$graphClient->users()->byId('user-id')->delete();
```

#### Get User's Messages

```php
$messages = $graphClient->me()->messages()->get();
foreach ($messages->getValue() as $message) {
    echo $message->getSubject() . "\n";
}
```

#### Query Parameters

```php
// Select specific fields
$user = $graphClient->me()->get([
    '$select' => 'displayName,mail,jobTitle'
]);

// Filter users
$users = $graphClient->users()->get([
    '$filter' => "startsWith(displayName,'John')",
    '$top' => 10
]);

// Order by
$users = $graphClient->users()->get([
    '$orderby' => 'displayName'
]);
```

## Architecture

### Request Builders

Request builders provide a fluent API for constructing Graph API requests:

```
GraphServiceClient
├── me() → MeRequestBuilder
│   ├── get()
│   ├── messages() → MessagesRequestBuilder
│   ├── mailFolders() → MailFoldersRequestBuilder
│   └── calendar() → CalendarRequestBuilder
├── users() → UsersRequestBuilder
│   ├── get()
│   ├── post()
│   ├── byId() → UserItemRequestBuilder
│   │   ├── get()
│   │   ├── patch()
│   │   ├── delete()
│   │   ├── messages()
│   │   └── mailFolders()
│   └── count()
├── groups() → GroupsRequestBuilder
└── applications() → ApplicationsRequestBuilder
```

### DTOs and Models

All models are strictly typed PHP classes generated from the OpenAPI specification:

- Full property type hints
- Getters and setters for all properties
- Validation support
- Serialization/deserialization via Symfony Serializer

### Authentication

Two authentication providers are included:

1. **BearerTokenAuthenticationProvider** - For pre-acquired access tokens
2. **ClientCredentialsAuthenticationProvider** - OAuth 2.0 client credentials flow with automatic token refresh

## Requirements

- PHP 8.1 or higher
- PSR-7 HTTP Message implementation
- PSR-18 HTTP Client implementation
- Symfony Serializer

## Development

### Regenerate SDK

To regenerate the SDK with the latest OpenAPI specification:

```bash
php generate.php
```

### Extend Request Builders

You can extend the generated request builders to add custom functionality:

```php
namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

class CustomUsersRequestBuilder extends UsersRequestBuilder
{
    public function searchByDepartment(string $department): UserCollectionResponse
    {
        return $this->get([
            '$filter' => "department eq '{$department}'"
        ]);
    }
}
```

## License

This SDK is auto-generated from Microsoft Graph OpenAPI specifications.

## Author

Alexis Peters (info@alexispeters.de)
