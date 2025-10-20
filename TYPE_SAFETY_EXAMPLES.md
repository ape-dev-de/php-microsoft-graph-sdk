# Full Type Safety Examples

## Collection Response Type Safety

### Variadic Parameters (Type-Safe)

```php
use ApeDevDe\MicrosoftGraphSdk\Models\User;
use ApeDevDe\MicrosoftGraphSdk\Models\UserCollectionResponse;

$collection = new UserCollectionResponse();

// Type-safe: Only accepts User objects
$user1 = new User();
$user1->setDisplayName('John Doe');

$user2 = new User();
$user2->setDisplayName('Jane Smith');

// Variadic parameters - fully type-safe!
$collection->setValue($user1, $user2);

// Or add one at a time
$collection->addValue($user1);
$collection->addValue($user2);

// This would cause a type error:
// $collection->setValue($user1, "not a user"); // ❌ Type error!
```

### Getting Values (Type-Safe)

```php
/** @var User[] $users */
$users = $collection->getValue();

// IDE knows these are User objects
foreach ($users as $user) {
    echo $user->getDisplayName(); // ✓ Autocomplete works!
    echo $user->getMail();         // ✓ Type-safe!
}
```

### Collection Helpers

```php
// Check if empty
if ($collection->isEmpty()) {
    echo "No users found\n";
}

// Count items
echo "Found " . $collection->count() . " users\n";

// Check for more results
if ($collection->hasMore()) {
    $nextLink = $collection->getOdataNextLink();
    // Fetch next page...
}

// Get total count (if requested with $count=true)
if ($collection->getOdataCount() !== null) {
    echo "Total: " . $collection->getOdataCount() . "\n";
}
```

## Query Options Type Safety

### Field Constants

```php
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\UserQueryOptions;

$options = (new UserQueryOptions())
    ->select([
        UserQueryOptions::FIELD_DISPLAY_NAME,  // ✓ Type-safe constant
        UserQueryOptions::FIELD_MAIL,          // ✓ IDE autocomplete
        UserQueryOptions::FIELD_JOB_TITLE,     // ✓ No typos possible
    ])
    ->top(10);

// This would work but no autocomplete:
$options->select(['displayName', 'mail']); // Still valid

// This would cause issues at runtime:
$options->select(['displayNam']); // ❌ Typo! No compile-time check
```

### Fluent API Type Safety

```php
$options = (new UserQueryOptions())
    ->top(10)           // int parameter - type-safe
    ->skip(20)          // int parameter - type-safe
    ->filter("...")     // string parameter - type-safe
    ->orderby("...")    // string parameter - type-safe
    ->count(true);      // bool parameter - type-safe

// Each method returns self for chaining
```

## Request Builder Type Safety

### Get with Type-Safe Options

```php
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\UserQueryOptions;

// Type-safe query options
$users = $client->users()->get(
    options: (new UserQueryOptions())
        ->top(10)
        ->select([UserQueryOptions::FIELD_DISPLAY_NAME])
);

// Return type is UserCollectionResponse
// IDE knows the type!
foreach ($users->getValue() as $user) {
    // $user is typed as User
    echo $user->getDisplayName();
}
```

### CRUD Operations Type Safety

```php
use ApeDevDe\MicrosoftGraphSdk\Models\User;

// Get - returns User
$user = $client->users()->byId('user-id')->get();
// $user is User type

// Update - accepts User, returns User
$user->setJobTitle('Senior Developer');
$updatedUser = $client->users()->byId('user-id')->patch($user);
// $updatedUser is User type

// Create - accepts User, returns User
$newUser = new User();
$newUser->setDisplayName('John Doe');
$createdUser = $client->users()->post($newUser);
// $createdUser is User type

// Delete - returns void
$client->users()->byId('user-id')->delete();
```

## Model Type Safety

### Strict Typing

```php
$user = new User();

// All setters are type-safe
$user->setDisplayName('John Doe');        // string
$user->setAccountEnabled(true);           // bool
$user->setBusinessPhones(['123-456']);    // array

// These would cause type errors:
// $user->setDisplayName(123);            // ❌ Type error!
// $user->setAccountEnabled('true');      // ❌ Type error!

// All getters return typed values
$name = $user->getDisplayName();          // ?string
$enabled = $user->getAccountEnabled();    // ?bool
$phones = $user->getBusinessPhones();     // array
```

### Nullable Types

```php
// All properties are nullable by default
$user = new User();

$name = $user->getDisplayName(); // ?string (can be null)

if ($name !== null) {
    // Now IDE knows $name is string
    echo strtoupper($name);
}
```

## Complete Type-Safe Example

```php
use ApeDevDe\MicrosoftGraphSdk\GraphServiceClient;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\UserQueryOptions;
use ApeDevDe\MicrosoftGraphSdk\Models\User;

$client = GraphServiceClient::create(...);

// Type-safe query
$options = (new UserQueryOptions())
    ->select([
        UserQueryOptions::FIELD_DISPLAY_NAME,
        UserQueryOptions::FIELD_MAIL,
        UserQueryOptions::FIELD_DEPARTMENT,
    ])
    ->filter("department eq 'Engineering'")
    ->orderby('displayName')
    ->top(50);

// Type-safe response
$users = $client->users()->get(options: $options);
// $users is UserCollectionResponse

// Type-safe iteration
foreach ($users->getValue() as $user) {
    // $user is User
    $name = $user->getDisplayName();  // ?string
    $mail = $user->getMail();         // ?string
    
    if ($name && $mail) {
        echo "{$name} <{$mail}>\n";
    }
}

// Type-safe collection operations
if (!$users->isEmpty()) {
    echo "Found " . $users->count() . " users\n";
}

if ($users->hasMore()) {
    echo "More results available\n";
}

// Type-safe update
$firstUser = $users->getValue()[0];
$firstUser->setJobTitle('Lead Engineer');
$client->users()->byId($firstUser->getId())->patch($firstUser);
```

## Benefits

✅ **IDE Autocomplete** - All types known at development time  
✅ **Compile-Time Checks** - Catch errors before runtime  
✅ **No Typos** - Field constants prevent property name typos  
✅ **Refactoring Safe** - IDE can safely rename properties  
✅ **Self-Documenting** - Types serve as documentation  
✅ **PHPStan/Psalm Compatible** - Static analysis tools work perfectly  

## Static Analysis

The SDK works perfectly with static analysis tools:

```bash
# PHPStan
phpstan analyse --level=max

# Psalm
psalm --show-info=true
```

All types are properly annotated and will pass strict static analysis!
