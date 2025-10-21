<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\MailboxSettings;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\MailboxSettingsQueryOptions;

/**
 * Request builder for MailboxSettings
 */
class MailboxSettingsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get the resource
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param MailboxSettingsQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return MailboxSettings
     */
    public function get(?MailboxSettingsQueryOptions $options = null, ?array $queryParameters = null): MailboxSettings
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, MailboxSettings::class);
    }

}
