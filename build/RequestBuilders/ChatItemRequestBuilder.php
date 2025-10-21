<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Chat;

/**
 * Request builder for individual Chat item
 */
class ChatItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get Chat item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return Chat
     */
    public function get(?array $queryParameters = null): Chat
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, Chat::class);
    }

    /**
     * Update Chat item
     *
     * @param Chat $item The item with updated properties
     * @return Chat
     */
    public function patch(Chat $item): Chat
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, Chat::class);
    }

    /**
     * Delete item
     *
     * @return void
     */
    public function delete(): void
    {
        $this->client->delete($this->getFullPath());
    }

    /**
     * Get installedApps request builder
     *
     * @return InstalledAppsRequestBuilder
     */
    public function installedApps(): InstalledAppsRequestBuilder
    {
        return new InstalledAppsRequestBuilder($this->client, $this->buildPath('installedApps'));
    }

    /**
     * Get lastMessagePreview request builder
     *
     * @return LastMessagePreviewRequestBuilder
     */
    public function lastMessagePreview(): LastMessagePreviewRequestBuilder
    {
        return new LastMessagePreviewRequestBuilder($this->client, $this->buildPath('lastMessagePreview'));
    }

    /**
     * Get members request builder
     *
     * @return MembersRequestBuilder
     */
    public function members(): MembersRequestBuilder
    {
        return new MembersRequestBuilder($this->client, $this->buildPath('members'));
    }

    /**
     * Get messages request builder
     *
     * @return MessagesRequestBuilder
     */
    public function messages(): MessagesRequestBuilder
    {
        return new MessagesRequestBuilder($this->client, $this->buildPath('messages'));
    }

    /**
     * Get hideForUser request builder
     *
     * @return HideForUserRequestBuilder
     */
    public function hideForUser(): HideForUserRequestBuilder
    {
        return new HideForUserRequestBuilder($this->client, $this->buildPath('hideForUser'));
    }

    /**
     * Get markChatReadForUser request builder
     *
     * @return MarkChatReadForUserRequestBuilder
     */
    public function markChatReadForUser(): MarkChatReadForUserRequestBuilder
    {
        return new MarkChatReadForUserRequestBuilder($this->client, $this->buildPath('markChatReadForUser'));
    }

    /**
     * Get markChatUnreadForUser request builder
     *
     * @return MarkChatUnreadForUserRequestBuilder
     */
    public function markChatUnreadForUser(): MarkChatUnreadForUserRequestBuilder
    {
        return new MarkChatUnreadForUserRequestBuilder($this->client, $this->buildPath('markChatUnreadForUser'));
    }

    /**
     * Get sendActivityNotification request builder
     *
     * @return SendActivityNotificationRequestBuilder
     */
    public function sendActivityNotification(): SendActivityNotificationRequestBuilder
    {
        return new SendActivityNotificationRequestBuilder($this->client, $this->buildPath('sendActivityNotification'));
    }

    /**
     * Get unhideForUser request builder
     *
     * @return UnhideForUserRequestBuilder
     */
    public function unhideForUser(): UnhideForUserRequestBuilder
    {
        return new UnhideForUserRequestBuilder($this->client, $this->buildPath('unhideForUser'));
    }

    /**
     * Get permissionGrants request builder
     *
     * @return PermissionGrantsRequestBuilder
     */
    public function permissionGrants(): PermissionGrantsRequestBuilder
    {
        return new PermissionGrantsRequestBuilder($this->client, $this->buildPath('permissionGrants'));
    }

    /**
     * Get pinnedMessages request builder
     *
     * @return PinnedMessagesRequestBuilder
     */
    public function pinnedMessages(): PinnedMessagesRequestBuilder
    {
        return new PinnedMessagesRequestBuilder($this->client, $this->buildPath('pinnedMessages'));
    }

    /**
     * Get tabs request builder
     *
     * @return TabsRequestBuilder
     */
    public function tabs(): TabsRequestBuilder
    {
        return new TabsRequestBuilder($this->client, $this->buildPath('tabs'));
    }

}
