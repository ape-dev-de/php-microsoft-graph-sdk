# Quick Start Guide

## Super Easy Setup (NO App Registration Needed!)

```bash
# 1. Install dependencies
composer install

# 2. Zero-config authentication (works with MFA!)
php auth-setup.php
# Choose option 1 (Quick Start)
# Login in browser
# Done!

# 3. Generate SDK
php generate-chunked.php

# 4. Generate tests
php generate-tests.php

# 5. Run tests
composer test

# 6. Start coding!
```

## Zero-Config Authentication ⭐

The `auth-setup.php` script with **Quick Start** option:
- ✅ **No app registration needed!**
- ✅ **Auto-detects tenant ID**
- ✅ **Auto-detects user**
- ✅ Works with MFA
- ✅ Interactive browser login
- ✅ Automatically saves to `.env`

**Just run it and choose option 1!**

### How It Works

1. Uses Microsoft Graph Explorer's public client ID
2. You login with your Microsoft account
3. Script auto-detects your tenant from the token
4. Everything saved to `.env` automatically

**No Azure Portal, no app registration, no configuration!**

See `ZERO_CONFIG_AUTH.md` for details.

Get started with the Microsoft Graph SDK for PHP in minutes.

## Installation

```bash
# Clone or navigate to the project
cd microsoft-graph-sdk

# Install dependencies
composer install

# Generate the SDK from OpenAPI specification
php generate.php
```

## Basic Usage

### 1. Create a Client

```php
<?php

require_once 'vendor/autoload.php';

use ApeDevDe\MicrosoftGraphSdk\GraphServiceClient;
use ApeDevDe\MicrosoftGraphSdk\Authentication\BearerTokenAuthenticationProvider;
use Symfony\Component\HttpClient\Psr18Client;
use Nyholm\Psr7\Factory\Psr17Factory;

// Setup
$httpClient = new Psr18Client();
$psr17Factory = new Psr17Factory();
$authProvider = new BearerTokenAuthenticationProvider('YOUR_ACCESS_TOKEN');

// Create client
$client = GraphServiceClient::create(
    $httpClient,
    $psr17Factory,
    $psr17Factory,
    $authProvider
);
```

### 2. Get Current User

```php
$me = $client->me()->get();
echo "Hello, " . $me->getDisplayName();
```

### 3. List Users

```php
$users = $client->users()->get([
    '$top' => 10,
    '$select' => 'displayName,mail'
]);

foreach ($users->getValue() as $user) {
    echo $user->getDisplayName() . "\n";
}
```

### 4. Get Specific User

```php
$user = $client->users()->byId('user-id')->get();
echo $user->getMail();
```

### 5. Update User

```php
$user = $client->users()->byId('user-id')->get();
$user->setJobTitle('Senior Developer');
$client->users()->byId('user-id')->patch($user);
```

## Authentication Options

### Option 1: Bearer Token (Pre-acquired)

```php
use ApeDevDe\MicrosoftGraphSdk\Authentication\BearerTokenAuthenticationProvider;

$authProvider = new BearerTokenAuthenticationProvider('YOUR_ACCESS_TOKEN');
```

**Use when**: You already have an access token from another authentication flow.

### Option 2: Client Credentials (App-only)

```php
use ApeDevDe\MicrosoftGraphSdk\Authentication\ClientCredentialsAuthenticationProvider;

$authProvider = new ClientCredentialsAuthenticationProvider(
    'YOUR_TENANT_ID',
    'YOUR_CLIENT_ID',
    'YOUR_CLIENT_SECRET',
    $httpClient,
    $psr17Factory,
    $psr17Factory
);
```

**Use when**: Your app needs to access Graph API without a user context (daemon/service apps).

## Common Operations

### Get User's Messages

```php
$messages = $client->me()->messages()->get([
    '$top' => 10,
    '$orderby' => 'receivedDateTime desc'
]);

foreach ($messages->getValue() as $message) {
    echo $message->getSubject() . "\n";
}
```

### List Groups

```php
$groups = $client->groups()->get();
foreach ($groups->getValue() as $group) {
    echo $group->getDisplayName() . "\n";
}
```

### Search with Filters

```php
$users = $client->users()->get([
    '$filter' => "startsWith(displayName,'John')",
    '$select' => 'displayName,mail,jobTitle'
]);
```

## Query Parameters

The SDK supports all OData query parameters:

| Parameter | Description | Example |
|-----------|-------------|---------|
| `$select` | Choose properties to return | `'displayName,mail'` |
| `$filter` | Filter results | `"startsWith(displayName,'A')"` |
| `$orderby` | Sort results | `'displayName desc'` |
| `$top` | Limit results | `10` |
| `$skip` | Skip results | `20` |
| `$expand` | Include related resources | `'manager'` |
| `$count` | Include count | `true` |

Example:

```php
$users = $client->users()->get([
    '$select' => 'displayName,mail,department',
    '$filter' => "department eq 'Sales'",
    '$orderby' => 'displayName',
    '$top' => 50
]);
```

## Error Handling

```php
use ApeDevDe\MicrosoftGraphSdk\Http\GraphException;

try {
    $user = $client->users()->byId('invalid-id')->get();
} catch (GraphException $e) {
    echo "Graph API Error: " . $e->getMessage();
    echo "Status Code: " . $e->getCode();
} catch (\Exception $e) {
    echo "General Error: " . $e->getMessage();
}
```

## Environment Variables

For security, use environment variables for credentials:

```bash
export GRAPH_ACCESS_TOKEN="your-token"
export GRAPH_TENANT_ID="your-tenant-id"
export GRAPH_CLIENT_ID="your-client-id"
export GRAPH_CLIENT_SECRET="your-client-secret"
```

Then in your code:

```php
$accessToken = getenv('GRAPH_ACCESS_TOKEN');
$authProvider = new BearerTokenAuthenticationProvider($accessToken);
```

## Next Steps

- Read the full [README.md](README.md) for detailed documentation
- Check [ARCHITECTURE.md](ARCHITECTURE.md) to understand the SDK design
- See [example.php](example.php) for more usage examples
- Explore the generated code in the `build/` directory

## Getting Access Tokens

### For Development/Testing

Use Azure Portal or Microsoft Graph Explorer:
1. Go to https://developer.microsoft.com/graph/graph-explorer
2. Sign in and consent to permissions
3. Copy the access token from the request headers

### For Production

Implement proper OAuth 2.0 flows:
- **Authorization Code Flow**: For web apps with user sign-in
- **Client Credentials Flow**: For daemon/service apps (included in SDK)
- **On-Behalf-Of Flow**: For middle-tier services

See [Microsoft Identity Platform documentation](https://docs.microsoft.com/azure/active-directory/develop/) for details.

## Permissions

Ensure your app has the required Microsoft Graph permissions:

- `User.Read`: Read user profile
- `User.ReadWrite`: Read and write user profile
- `User.ReadBasic.All`: Read all users' basic profiles
- `Mail.Read`: Read user mail
- `Group.Read.All`: Read all groups

Configure permissions in Azure Portal → App Registrations → API Permissions.

## Support

For issues or questions:
- Check the [Microsoft Graph documentation](https://docs.microsoft.com/graph/)
- Review the generated code in `build/`
- Examine the request builders for available methods
