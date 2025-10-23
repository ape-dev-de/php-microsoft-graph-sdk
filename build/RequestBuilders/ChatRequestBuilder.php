<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Chat;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\InstalledAppsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\LastMessagePreviewRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\MembersRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\MessagesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\HideForUserRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\MarkChatReadForUserRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\MarkChatUnreadForUserRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\SendActivityNotificationRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\UnhideForUserRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\PermissionGrantsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\PinnedMessagesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\TabsRequestBuilder;

/**
 * Request builder for {chat-id}
 */
class ChatRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get chat
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return Chat
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): Chat
    {
        $queryParams = [];
        if ($select !== null && $select !== '') {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null && $expand !== '') {
            $queryParams['$expand'] = implode(',', $expand);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to Chat
     */
    private function deserializeGet(string $body): mixed
    {
        if (empty($body)) {
            return null;
        }
        
        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }
        
        // Single object
        return new Chat($data);
    }
    /**
     * Update chat
     * @param Chat $body Request body
     * @return Chat
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(Chat $body): Chat
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to Chat
     */
    private function deserializePatch(string $body): mixed
    {
        if (empty($body)) {
            return null;
        }
        
        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }
        
        // Single object
        return new Chat($data);
    }
    /**
     * Delete chat
     *
     * @param string|null $ifMatch ETag
     * @return mixed
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function delete(?string $ifMatch = null): mixed
    {
        $queryParams = [];
        if ($ifMatch !== null && $ifMatch !== '') {
            $queryParams['If-Match'] = $ifMatch;
        }
        $response = $this->client->delete($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeDelete($responseBody);
    }

    /**
     * Deserialize response to mixed
     */
    private function deserializeDelete(string $body): mixed
    {
        if (empty($body)) {
            return null;
        }
        
        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }
        
        // Single object
        return $data;
    }
    /**
     * Navigate to installedApps
     *
     * @return InstalledAppsRequestBuilder
     */
    public function installedApps(): InstalledAppsRequestBuilder
    {
        return new InstalledAppsRequestBuilder($this->client, $this->requestUrl . '/installedApps');
    }
    /**
     * Navigate to lastMessagePreview
     *
     * @return LastMessagePreviewRequestBuilder
     */
    public function lastMessagePreview(): LastMessagePreviewRequestBuilder
    {
        return new LastMessagePreviewRequestBuilder($this->client, $this->requestUrl . '/lastMessagePreview');
    }
    /**
     * Navigate to members
     *
     * @return MembersRequestBuilder
     */
    public function members(): MembersRequestBuilder
    {
        return new MembersRequestBuilder($this->client, $this->requestUrl . '/members');
    }
    /**
     * Navigate to messages
     *
     * @return MessagesRequestBuilder
     */
    public function messages(): MessagesRequestBuilder
    {
        return new MessagesRequestBuilder($this->client, $this->requestUrl . '/messages');
    }
    /**
     * Navigate to hideForUser
     *
     * @return HideForUserRequestBuilder
     */
    public function hideForUser(): HideForUserRequestBuilder
    {
        return new HideForUserRequestBuilder($this->client, $this->requestUrl . '/hideForUser');
    }
    /**
     * Navigate to markChatReadForUser
     *
     * @return MarkChatReadForUserRequestBuilder
     */
    public function markChatReadForUser(): MarkChatReadForUserRequestBuilder
    {
        return new MarkChatReadForUserRequestBuilder($this->client, $this->requestUrl . '/markChatReadForUser');
    }
    /**
     * Navigate to markChatUnreadForUser
     *
     * @return MarkChatUnreadForUserRequestBuilder
     */
    public function markChatUnreadForUser(): MarkChatUnreadForUserRequestBuilder
    {
        return new MarkChatUnreadForUserRequestBuilder($this->client, $this->requestUrl . '/markChatUnreadForUser');
    }
    /**
     * Navigate to sendActivityNotification
     *
     * @return SendActivityNotificationRequestBuilder
     */
    public function sendActivityNotification(): SendActivityNotificationRequestBuilder
    {
        return new SendActivityNotificationRequestBuilder($this->client, $this->requestUrl . '/sendActivityNotification');
    }
    /**
     * Navigate to unhideForUser
     *
     * @return UnhideForUserRequestBuilder
     */
    public function unhideForUser(): UnhideForUserRequestBuilder
    {
        return new UnhideForUserRequestBuilder($this->client, $this->requestUrl . '/unhideForUser');
    }
    /**
     * Navigate to permissionGrants
     *
     * @return PermissionGrantsRequestBuilder
     */
    public function permissionGrants(): PermissionGrantsRequestBuilder
    {
        return new PermissionGrantsRequestBuilder($this->client, $this->requestUrl . '/permissionGrants');
    }
    /**
     * Navigate to pinnedMessages
     *
     * @return PinnedMessagesRequestBuilder
     */
    public function pinnedMessages(): PinnedMessagesRequestBuilder
    {
        return new PinnedMessagesRequestBuilder($this->client, $this->requestUrl . '/pinnedMessages');
    }
    /**
     * Navigate to tabs
     *
     * @return TabsRequestBuilder
     */
    public function tabs(): TabsRequestBuilder
    {
        return new TabsRequestBuilder($this->client, $this->requestUrl . '/tabs');
    }
}
