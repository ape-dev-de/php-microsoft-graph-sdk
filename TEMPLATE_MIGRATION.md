# Template-Based Code Generation Migration

## Overview

The code generation system has been migrated from inline code generation to template-based generation using PHP templates.

## Changes Made

### 1. **Removed Inline Code Generation**

**Before:**
```php
$code = "<?php\n\ndeclare(strict_types=1);\n\n";
$code .= "namespace ApeDevDe\\MicrosoftGraphSdk\\RequestBuilders;\n\n";
// ... hundreds of lines of string concatenation
```

**After:**
```php
return renderTemplate('RequestBuilder.php', [
    'className' => $className,
    'path' => $path,
    'imports' => $imports,
    'methods' => $methods
]);
```

### 2. **New Templates Created**

#### `templates/RequestBuilder.php`
Main request builder class structure with:
- Namespace declaration
- Imports for models and child builders
- Class definition
- Methods placeholder

#### `templates/HttpMethod.php`
HTTP method generation supporting:
- GET, POST, PUT, PATCH, DELETE
- Query parameters with proper ordering
- Request body for mutation methods
- Return type hints
- PHPDoc comments

#### `templates/ChildPathMethod.php`
Child path navigation methods:
- Method name generation
- Return type (child request builder)
- URL path construction

### 3. **Removed QueryOptions**

**Before:**
- Generated `QueryOptions` classes for each model
- Required separate imports
- Complex type-safe wrapper classes

**After:**
- Direct parameters in method signatures
- Parameters extracted from OpenAPI spec
- Ordered: `select`, `expand`, then others
- Type-safe with PHP type hints

**Example:**
```php
// OLD (with QueryOptions)
public function get(?UserQueryOptions $options = null): User
{
    $params = $options ? $options->toArray() : [];
    // ...
}

// NEW (direct parameters)
public function get(?string $select = null, ?string $expand = null, ?string $filter = null): User
{
    $queryParams = [];
    if ($select !== null) {
        $queryParams['select'] = $select;
    }
    // ...
}
```

### 4. **Updated Functions**

#### `generateRequestBuilderCode()`
- Now uses `renderTemplate()` instead of string concatenation
- Collects imports and child builder imports
- Generates methods using templates
- Cleaner and more maintainable

#### `generateHttpMethodFromTemplate()`
- Replaces `generateHttpMethod()`
- Uses `HttpMethod.php` template
- Builds parameter list
- Handles return types

#### `generateChildPathMethodFromTemplate()`
- Replaces `generateChildPathMethod()`
- Uses `ChildPathMethod.php` template
- Generates navigation methods

## Benefits

### 1. **Maintainability**
- Templates are easier to read and modify
- Separation of concerns (logic vs. presentation)
- No complex string escaping

### 2. **Consistency**
- All generated code follows the same structure
- Templates ensure uniform formatting
- Easier to enforce coding standards

### 3. **Flexibility**
- Easy to customize output without changing PHP code
- Templates can be overridden
- Non-developers can modify templates

### 4. **Simplicity**
- No QueryOptions complexity
- Direct parameter passing
- Fewer generated files

### 5. **Type Safety**
- Parameters have proper PHP type hints
- Return types from OpenAPI spec
- Union types for anyOf patterns

## Template Variables

### RequestBuilder.php
- `$className` - Request builder class name
- `$path` - API path
- `$imports` - Array of model imports
- `$childBuilderImports` - Array of child builder imports
- `$methods` - Generated methods string

### HttpMethod.php
- `$httpMethod` - HTTP method (GET, POST, etc.)
- `$methodName` - PHP method name (get, post, etc.)
- `$summary` - Method description
- `$parameters` - Array of parameter definitions
- `$returnTypeHint` - Return type hint
- `$parameterList` - Method signature parameters

### ChildPathMethod.php
- `$childPath` - Child path segment
- `$methodName` - PHP method name
- `$className` - Child request builder class name

## Migration Complete

All code generation now uses templates:
- ✅ Request builder classes
- ✅ HTTP methods (GET, POST, PUT, PATCH, DELETE)
- ✅ Child path navigation methods
- ✅ No QueryOptions dependencies
- ✅ Direct parameter passing
- ✅ Proper type hints

## Testing

Verify syntax:
```bash
php -l generate-v2.php
php -l templates/RequestBuilder.php
php -l templates/HttpMethod.php
php -l templates/ChildPathMethod.php
```

All checks pass: ✅

## Next Steps

Run the generator:
```bash
php generate-v2.php
```

The generated code will:
- Use templates for all classes
- Have direct parameters instead of QueryOptions
- Include proper type hints from OpenAPI spec
- Support all HTTP methods with parameters
- Enable fluent API navigation
