# Microsoft Graph SDK Architecture

## Overview

This SDK uses a **Request Builder Pattern** combined with **strict type-safe DTOs** generated from OpenAPI specifications. The architecture ensures type safety, IDE autocomplete support, and a fluent API experience.

## Architecture Layers

```
┌─────────────────────────────────────────────────────────────┐
│                    GraphServiceClient                        │
│                  (Main Entry Point)                          │
└─────────────────────────────────────────────────────────────┘
                            │
                            ├─── me()
                            ├─── users()
                            ├─── groups()
                            └─── applications()
                            
┌─────────────────────────────────────────────────────────────┐
│                   Request Builders                           │
│  (Fluent API for building Graph API requests)               │
├─────────────────────────────────────────────────────────────┤
│  • GraphRequestBuilder (root)                               │
│  • UsersRequestBuilder                                      │
│  • UserItemRequestBuilder                                   │
│  • MeRequestBuilder                                         │
│  • GroupsRequestBuilder                                     │
│  • MessagesRequestBuilder                                   │
│  • ... (generated from OpenAPI)                             │
└─────────────────────────────────────────────────────────────┘
                            │
┌─────────────────────────────────────────────────────────────┐
│                      GraphClient                             │
│              (HTTP Client Wrapper)                           │
├─────────────────────────────────────────────────────────────┤
│  • get(path, queryParams)                                   │
│  • post(path, body, queryParams)                            │
│  • patch(path, body, queryParams)                           │
│  • put(path, body, queryParams)                             │
│  • delete(path, queryParams)                                │
│  • deserialize(response, type)                              │
└─────────────────────────────────────────────────────────────┘
                            │
        ┌───────────────────┼───────────────────┐
        │                   │                   │
┌───────────────┐  ┌────────────────┐  ┌──────────────────┐
│ PSR-18 HTTP   │  │ Authentication │  │ Symfony          │
│ Client        │  │ Provider       │  │ Serializer       │
└───────────────┘  └────────────────┘  └──────────────────┘
                            │
                    ┌───────┴────────┐
                    │                │
        ┌───────────────────┐  ┌─────────────────────┐
        │ Bearer Token      │  │ Client Credentials  │
        │ Auth              │  │ Auth (OAuth2)       │
        └───────────────────┘  └─────────────────────┘

┌─────────────────────────────────────────────────────────────┐
│                    Models / DTOs                             │
│         (Generated from OpenAPI Schema)                      │
├─────────────────────────────────────────────────────────────┤
│  • User                                                      │
│  • Group                                                     │
│  • Message                                                   │
│  • Calendar                                                  │
│  • ... (all Graph API entities)                             │
│                                                              │
│  Features:                                                   │
│  - Strict typing (PHP 8.1+)                                 │
│  - Getters/Setters                                          │
│  - Serialization support                                    │
│  - Validation                                               │
└─────────────────────────────────────────────────────────────┘
```

## Key Components

### 1. GraphServiceClient

The main entry point for the SDK. Provides factory methods to create a fully configured client.

```php
$client = GraphServiceClient::create(
    $httpClient,
    $requestFactory,
    $streamFactory,
    $authProvider
);
```

### 2. Request Builders

Request builders provide a fluent, chainable API for constructing Graph API requests:

- **Collection Builders**: Handle collection endpoints (e.g., `/users`)
  - `get()` - List items
  - `post()` - Create item
  - `byId()` - Navigate to item
  - `count()` - Get count

- **Item Builders**: Handle individual items (e.g., `/users/{id}`)
  - `get()` - Retrieve item
  - `patch()` - Update item
  - `delete()` - Delete item
  - Navigation properties (e.g., `messages()`, `mailFolders()`)

### 3. GraphClient

Low-level HTTP client that:
- Builds URLs with query parameters
- Authenticates requests
- Serializes request bodies
- Deserializes responses
- Handles errors

### 4. Authentication Providers

Implement the `AuthenticationProvider` interface:

- **BearerTokenAuthenticationProvider**: For pre-acquired tokens
- **ClientCredentialsAuthenticationProvider**: OAuth 2.0 client credentials flow with automatic token refresh

### 5. Models (DTOs)

Generated from OpenAPI schema definitions:
- Strict PHP 8.1+ types
- Getters and setters for all properties
- Symfony Serializer integration
- Validation support

## Request Flow

```
1. User Code
   $user = $client->users()->byId('123')->get();
   
2. Request Builder
   UsersRequestBuilder → UserItemRequestBuilder
   Builds path: /users/123
   
3. GraphClient
   - Builds URL: https://graph.microsoft.com/v1.0/users/123
   - Creates PSR-7 request
   
4. Authentication Provider
   - Adds Authorization header
   - Handles token refresh if needed
   
5. PSR-18 HTTP Client
   - Sends HTTP request
   - Returns PSR-7 response
   
6. GraphClient
   - Checks status code
   - Deserializes JSON to User object
   
7. User Code
   - Receives strongly-typed User object
   - $user->getDisplayName()
```

## Code Generation

The SDK uses **jane-php/open-api-3** to generate:

1. **Models**: From OpenAPI schema definitions
   - Properties with correct types
   - Getters and setters
   - Normalizers for serialization

2. **Request Builders**: Custom generation
   - Based on OpenAPI paths
   - Fluent API methods
   - Type hints for parameters and return values

## Design Principles

### 1. Type Safety
- All methods have strict type hints
- Return types are always specified
- DTOs use PHP 8.1+ property types

### 2. Fluent API
- Chainable method calls
- IDE autocomplete support
- Intuitive navigation

### 3. PSR Compliance
- PSR-7: HTTP messages
- PSR-18: HTTP client
- PSR-17: HTTP factories

### 4. Separation of Concerns
- Authentication is pluggable
- HTTP client is injectable
- Serialization is configurable

### 5. Extensibility
- Request builders can be extended
- Custom authentication providers
- Custom serializers

## Query Parameters

All request methods accept optional query parameters:

```php
$users = $client->users()->get([
    '$select' => 'displayName,mail',
    '$filter' => "startsWith(displayName,'John')",
    '$top' => 10,
    '$orderby' => 'displayName',
    '$expand' => 'manager'
]);
```

## Error Handling

The SDK throws `GraphException` for API errors:

```php
try {
    $user = $client->users()->byId('invalid-id')->get();
} catch (GraphException $e) {
    echo "Error: " . $e->getMessage();
    echo "Status: " . $e->getCode();
}
```

## Performance Considerations

1. **Token Caching**: Client credentials auth caches tokens
2. **Lazy Loading**: Request builders are created on-demand
3. **Streaming**: Large responses can be streamed
4. **Connection Pooling**: Use HTTP client with connection pooling

## Future Enhancements

1. **Batch Requests**: Support for `$batch` endpoint
2. **Delta Queries**: Support for change tracking
3. **File Upload**: Chunked upload for large files
4. **Webhooks**: Subscription management
5. **Caching Layer**: Optional response caching
6. **Retry Logic**: Automatic retry with exponential backoff
