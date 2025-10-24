# Namespace Refactoring for RequestBuilders

## Overview
Refactored the SDK generator to organize RequestBuilder classes into subdirectories and namespaces based on their API root path. This resolves naming conflicts without using prefixes.

## Changes Made

### 1. Directory Structure
RequestBuilders are now organized by root namespace:
```
build/RequestBuilders/
├── Admin/
│   ├── MessagesRequestBuilder.php
│   └── ServiceAnnouncementRequestBuilder.php
├── Users/
│   ├── MessagesRequestBuilder.php
│   ├── MailFoldersRequestBuilder.php
│   └── UserRequestBuilder.php
├── Sites/
│   └── SiteRequestBuilder.php
└── ...
```

### 2. Namespace Organization
Each RequestBuilder now has a namespace based on its root path:
- `/admin/serviceAnnouncement/messages` → `ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Admin\MessagesRequestBuilder`
- `/users/{user-id}/mailFolders/{mailFolder-id}/messages` → `ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\MessagesRequestBuilder`
- `/sites/{site-id}` → `ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Sites\SiteRequestBuilder`

### 3. Import Handling
The generator automatically:
- Imports `BaseRequestBuilder` from the parent namespace
- Imports child builders from their respective namespaces
- Handles cross-namespace references (e.g., Users builder referencing Admin builder)

### 4. Code Changes

#### `generateRequestBuilderClass()` (lines 797-858)
- Extracts root namespace from the first path segment
- Creates subdirectories for each namespace
- Tracks classes by full namespace path

#### `generateRequestBuilderCode()` (lines 863-946)
- Passes namespace to template
- Resolves child builder namespaces
- Generates proper import statements

#### `RequestBuilder.php` Template
- Updated namespace declaration to include root namespace
- Added explicit `BaseRequestBuilder` import
- Handles both same-namespace and cross-namespace child builder imports

## Benefits

1. **No Naming Conflicts**: Classes with the same name can coexist in different namespaces
2. **Better Organization**: Code is logically grouped by API area
3. **PSR-4 Compliance**: Directory structure matches namespace structure
4. **Cleaner Names**: No need for prefixes like `AdminMessagesRequestBuilder`
5. **Easier Navigation**: Developers can find related classes in the same directory

## Models
Models remain in the single `ApeDevDe\MicrosoftGraphSdk\Models` namespace as they are shared across all API areas and don't have path-based conflicts.

## Testing
To regenerate the SDK with the new structure:
```bash
php generate-v2.php
```

This will:
1. Create namespace subdirectories under `build/RequestBuilders/`
2. Generate all RequestBuilders with proper namespaces
3. Update all imports and references

## Migration Notes
Existing code using the old flat structure will need to update imports:
```php
// Old
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\MessagesRequestBuilder;

// New
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Admin\MessagesRequestBuilder;
// or
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\MessagesRequestBuilder;
```
