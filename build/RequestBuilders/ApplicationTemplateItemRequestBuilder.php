<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\ApplicationTemplate;

/**
 * Request builder for individual ApplicationTemplate item
 */
class ApplicationTemplateItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get ApplicationTemplate item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return ApplicationTemplate
     */
    public function get(?array $queryParameters = null): ApplicationTemplate
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, ApplicationTemplate::class);
    }

    /**
     * Get instantiate request builder
     *
     * @return InstantiateRequestBuilder
     */
    public function instantiate(): InstantiateRequestBuilder
    {
        return new InstantiateRequestBuilder($this->client, $this->buildPath('instantiate'));
    }

}
