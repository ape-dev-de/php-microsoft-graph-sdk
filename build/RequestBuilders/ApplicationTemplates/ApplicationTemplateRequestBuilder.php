<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ApplicationTemplates;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\ApplicationTemplate;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ApplicationTemplates\InstantiateRequestBuilder;

/**
 * Request builder for /applicationTemplates/{applicationTemplate-id}
 */
class ApplicationTemplateRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get applicationTemplate
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return ApplicationTemplate
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): ApplicationTemplate
    {
        $queryParams = [];
        if ($select !== null && $select !== []) {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null && $expand !== []) {
            $queryParams['$expand'] = implode(',', $expand);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to ApplicationTemplate
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
        return new ApplicationTemplate($data);
    }
    /**
     * Navigate to instantiate
     *
     * @return InstantiateRequestBuilder
     */
    public function instantiate(): InstantiateRequestBuilder
    {
        return new InstantiateRequestBuilder($this->client, $this->requestUrl . '/instantiate');
    }
}
