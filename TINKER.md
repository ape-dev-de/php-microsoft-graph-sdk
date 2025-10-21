# 🔧 Graph API Tinker Shell

Interactive REPL for debugging and exploring the Microsoft Graph SDK.

## Quick Start

```bash
php tinker.php
```

## Features

✅ **Auto-authentication** - Uses credentials from `.env`  
✅ **Interactive REPL** - Execute Graph API calls in real-time  
✅ **Pretty output** - Formatted results with colors  
✅ **Command history** - Saved in `.tinker_history`  
✅ **Error handling** - Clear error messages with stack traces  
✅ **Smart display** - Shows useful object properties automatically  

## Example Session

```
╔══════════════════════════════════════════════════════════════╗
║         Microsoft Graph SDK - Interactive Tinker            ║
╚══════════════════════════════════════════════════════════════╝

🔐 Authenticating...
✅ Connected to Microsoft Graph API
📊 Tenant: your-tenant-id

Available variables:
  $client - GraphServiceClient instance

Example commands:
  $client->users()->get()
  $client->me()->get()
  $client->users()->byId('user-id')->get()
  $client->groups()->get(queryParameters: ['$top' => 5])

Special commands:
  .help    - Show this help
  .exit    - Exit tinker
  .clear   - Clear screen
  .vars    - Show available variables

═══════════════════════════════════════════════════════════════

[1] > $client->users()->get()

=> UserCollectionResponse {
   count: 42
   first: id=abc123, displayName=John Doe
}

Tip: Use json_encode($result, JSON_PRETTY_PRINT) for full output
     Or var_dump($result) for detailed inspection

[2] > $client->me()->get()

=> User {
   id: abc123
   displayName: John Doe
   userPrincipalName: john@contoso.com
}

[3] > .exit

👋 Goodbye!
```

## Common Commands

### Get Users
```php
// Get all users
$client->users()->get()

// Get top 5 users
$client->users()->get(queryParameters: ['$top' => 5])

// Get users with specific fields
$client->users()->get(queryParameters: ['$select' => 'id,displayName,mail'])

// Filter users
$client->users()->get(queryParameters: ['$filter' => "startsWith(displayName,'A')"])
```

### Get Specific User
```php
// Get user by ID
$userId = 'user-id-here';
$client->users()->byId($userId)->get()

// Get user with select
$client->users()->byId($userId)->get(queryParameters: ['$select' => 'id,displayName'])
```

### Navigate Subpaths
```php
// Get user activities
$client->users()->byId($userId)->activities()->get()

// Get user authentication methods
$client->users()->byId($userId)->authentication()->emailMethods()->get()

// Get user calendar
$client->users()->byId($userId)->calendar()->get()

// Get user messages
$client->users()->byId($userId)->messages()->get(queryParameters: ['$top' => 10])
```

### Get Current User
```php
// Get me
$client->me()->get()

// Get my messages
$client->me()->messages()->get()

// Get my calendar
$client->me()->calendar()->events()->get()
```

### Get Groups
```php
// Get all groups
$client->groups()->get()

// Get specific group
$client->groups()->byId($groupId)->get()

// Get group members
$client->groups()->byId($groupId)->members()->get()
```

## Advanced Usage

### Store Results in Variables
```php
[1] > $users = $client->users()->get()
[2] > $firstUser = $users->getValue()[0]
[3] > $firstUser->getDisplayName()
=> "John Doe"

[4] > $userId = $firstUser->getId()
[5] > $client->users()->byId($userId)->activities()->get()
```

### Pretty Print JSON
```php
[1] > $user = $client->me()->get()
[2] > echo json_encode($user, JSON_PRETTY_PRINT)
{
    "id": "abc123",
    "displayName": "John Doe",
    "mail": "john@contoso.com"
}
```

### Inspect Objects
```php
[1] > $user = $client->me()->get()
[2] > var_dump($user)
[3] > print_r($user)
[4] > get_class($user)
=> "ApeDevDe\MicrosoftGraphSdk\Models\User"
```

### Loop Through Results
```php
[1] > $users = $client->users()->get(queryParameters: ['$top' => 5])
[2] > foreach ($users->getValue() as $user) { echo $user->getDisplayName() . "\n"; }
John Doe
Jane Smith
Bob Johnson
Alice Williams
Charlie Brown
```

### Error Handling
```php
[1] > try { $client->users()->byId('invalid-id')->get(); } catch (\Exception $e) { echo $e->getMessage(); }
Error: Client error: 404 Not Found
```

## Special Commands

| Command | Description |
|---------|-------------|
| `.help` | Show help and examples |
| `.exit` | Exit tinker shell |
| `.clear` | Clear the screen |
| `.vars` | Show available variables |

## Tips & Tricks

### 1. Use Tab Completion (in some terminals)
```php
$client->users()->  // Press Tab to see methods
```

### 2. Multi-line Commands
```php
[1] > $result = $client->users()->get(
...     queryParameters: [
...         '$top' => 10,
...         '$select' => 'id,displayName'
...     ]
... )
```

### 3. Quick Testing
```php
// Test if a user exists
[1] > $client->users()->byId('user-id')->get() !== null
=> true

// Count users
[1] > count($client->users()->get()->getValue())
=> 42
```

### 4. Explore API
```php
// See what methods are available
[1] > get_class_methods($client->users())

// See what properties a model has
[1] > get_class_methods($client->me()->get())
```

## Command History

All commands are saved to `.tinker_history` in the project root.

You can review your history:
```bash
cat .tinker_history
```

## Troubleshooting

### Authentication Failed
```
❌ Authentication failed: Invalid credentials
```
**Solution**: Run `php auth-setup.php` to configure credentials

### Connection Timeout
```
Error: cURL error 28: Operation timed out
```
**Solution**: Check your internet connection and firewall settings

### Permission Denied
```
Error: Insufficient privileges to complete the operation
```
**Solution**: Ensure your app has the required Microsoft Graph permissions

## Color Output

- 🟢 **Green** - Successful results
- 🔴 **Red** - Errors
- 🔵 **Cyan** - Line numbers
- ⚪ **Gray** - Tips and hints

## Exit

Type `.exit`, `exit`, or `quit` to leave the tinker shell.

Press `Ctrl+C` to force quit.

---

**Happy Tinkering!** 🚀
