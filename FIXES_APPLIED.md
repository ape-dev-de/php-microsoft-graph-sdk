# Fixes Applied to generate-v2.php

## Issues Fixed

### 1. **Duplicate Function Declarations**
- **Problem**: `resolveSchemaReference()` was declared twice (lines 360 and 1149)
- **Solution**: Removed duplicate declaration at line 1149

- **Problem**: `generateRequestBuilderClass()` was declared twice (lines 663 and 2221)
- **Solution**: Removed old duplicate declaration and related helper functions (generateGetMethod, generatePostMethod, generateByIdMethod, generateCountMethod)

- **Problem**: `mapPropertyType()` was declared twice
- **Solution**: Removed duplicate declaration

### 2. **Enhanced anyOf Handling**
- **Before**: anyOf only picked the first $ref type
- **After**: Collects ALL types from anyOf and creates proper union types
  - Example: `anyOf: [DriveItem, {type: object}]` → `DriveItem|stdClass`
  - Handles nested anyOf/allOf recursively
  - Adds `stdClass` for object types without $ref

### 3. **Enhanced allOf Handling**
- **Before**: allOf only picked the first $ref type
- **After**: Properly handles all allOf patterns
  - Collects all $ref types
  - Detects inline properties for compound model generation
  - Creates union types when no properties: `Type1|Type2|stdClass`
  - Handles nested anyOf/allOf recursively
  - Adds `stdClass` for object types

### 4. **Object Type Serialization**
- **Problem**: Object types could cause serialization issues
- **Solution**: Always add `stdClass` to union types when object type is present
  - `{type: object}` → `stdClass`
  - `anyOf: [SomeType, {type: object}]` → `SomeType|stdClass`
  - `allOf: [SomeType, {type: object}]` → `SomeType|stdClass`

## Improved Type Resolution

### resolveSchemaTypes() Function

Now properly handles:

1. **Direct $ref**
   ```php
   {$ref: "#/components/schemas/DriveItem"} → DriveItem
   ```

2. **anyOf with multiple types**
   ```php
   anyOf: [
     {$ref: "#/components/schemas/DriveItem"},
     {type: "object"}
   ] → DriveItem|stdClass
   ```

3. **anyOf with nested patterns**
   ```php
   anyOf: [
     {$ref: "#/components/schemas/Type1"},
     {anyOf: [{$ref: "#/components/schemas/Type2"}, {type: "string"}]}
   ] → Type1|Type2|string
   ```

4. **allOf with properties (compound model)**
   ```php
   allOf: [
     {$ref: "#/components/schemas/DriveItem"},
     {properties: {foo: {type: "string"}}}
   ] → Generates FooDriveItem extends DriveItem
   ```

5. **allOf without properties (union)**
   ```php
   allOf: [
     {$ref: "#/components/schemas/Type1"},
     {$ref: "#/components/schemas/Type2"}
   ] → Type1|Type2
   ```

6. **Primitive object type**
   ```php
   {type: "object"} → stdClass
   ```

## Code Quality Improvements

- ✅ No duplicate function declarations
- ✅ Proper recursive type resolution
- ✅ Complete anyOf/allOf support with union types
- ✅ stdClass added for all object types
- ✅ Nested pattern support (anyOf in anyOf, allOf in anyOf, etc.)
- ✅ Syntax validation passes

## Testing

Run syntax check:
```bash
php -l generate-v2.php
```

Result: ✅ No syntax errors detected

## Next Steps

The script is now ready to run:
```bash
php generate-v2.php
```

This will generate request builders with:
- Proper union types for anyOf patterns
- Compound models for allOf with properties
- stdClass for object types to prevent serialization issues
- Complete type coverage for all schema patterns
