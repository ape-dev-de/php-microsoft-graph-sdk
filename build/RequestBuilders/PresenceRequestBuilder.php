<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Presence;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\PresenceQueryOptions;

/**
 * Request builder for Presence
 */
class PresenceRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get the resource
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param PresenceQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return Presence
     */
    public function get(?PresenceQueryOptions $options = null, ?array $queryParameters = null): Presence
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, Presence::class);
    }

    /**
     * Create a new Presence
     *
     * @param Presence $item The item to create
     * @return Presence
     */
    public function post(Presence $item): Presence
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, Presence::class);
    }
    /**
     * Get clearPresence request builder
     *
     * @return ClearPresenceRequestBuilder
     */
    public function clearPresence(): ClearPresenceRequestBuilder
    {
        return new ClearPresenceRequestBuilder($this->client, $this->buildPath('clearPresence'));
    }

    /**
     * Get clearUserPreferredPresence request builder
     *
     * @return ClearUserPreferredPresenceRequestBuilder
     */
    public function clearUserPreferredPresence(): ClearUserPreferredPresenceRequestBuilder
    {
        return new ClearUserPreferredPresenceRequestBuilder($this->client, $this->buildPath('clearUserPreferredPresence'));
    }

    /**
     * Get setPresence request builder
     *
     * @return SetPresenceRequestBuilder
     */
    public function setPresence(): SetPresenceRequestBuilder
    {
        return new SetPresenceRequestBuilder($this->client, $this->buildPath('setPresence'));
    }

    /**
     * Get setStatusMessage request builder
     *
     * @return SetStatusMessageRequestBuilder
     */
    public function setStatusMessage(): SetStatusMessageRequestBuilder
    {
        return new SetStatusMessageRequestBuilder($this->client, $this->buildPath('setStatusMessage'));
    }

    /**
     * Get setUserPreferredPresence request builder
     *
     * @return SetUserPreferredPresenceRequestBuilder
     */
    public function setUserPreferredPresence(): SetUserPreferredPresenceRequestBuilder
    {
        return new SetUserPreferredPresenceRequestBuilder($this->client, $this->buildPath('setUserPreferredPresence'));
    }

}
