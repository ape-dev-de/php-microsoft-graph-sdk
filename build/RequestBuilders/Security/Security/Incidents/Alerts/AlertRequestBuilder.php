<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\Security\Incidents\Alerts;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\SecurityAlert;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\Security\Incidents\Alerts\CommentsRequestBuilder;

/**
 * Request builder for /security/incidents/{incident-id}/alerts/{alert-id}
 */
class AlertRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get alerts from security
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return SecurityAlert
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): SecurityAlert
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
     * Deserialize response to SecurityAlert
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
        return new SecurityAlert($data);
    }
    /**
     * Navigate to comments
     *
     * @return CommentsRequestBuilder
     */
    public function comments(): CommentsRequestBuilder
    {
        return new CommentsRequestBuilder($this->client, $this->requestUrl . '/comments');
    }
}
