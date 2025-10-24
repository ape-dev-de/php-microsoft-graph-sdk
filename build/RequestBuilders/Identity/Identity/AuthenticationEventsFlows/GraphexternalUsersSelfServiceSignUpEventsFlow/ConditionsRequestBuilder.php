<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Identity\Identity\AuthenticationEventsFlows\GraphexternalUsersSelfServiceSignUpEventsFlow;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\AuthenticationConditions;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Identity\Identity\AuthenticationEventsFlows\GraphexternalUsersSelfServiceSignUpEventsFlow\Conditions\ApplicationsRequestBuilder;

/**
 * Request builder for /identity/authenticationEventsFlows/{authenticationEventsFlow-id}/graph.externalUsersSelfServiceSignUpEventsFlow/conditions
 */
class ConditionsRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get conditions property value
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return AuthenticationConditions
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): AuthenticationConditions
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
     * Deserialize response to AuthenticationConditions
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
        return new AuthenticationConditions($data);
    }
    /**
     * Navigate to applications
     *
     * @return ApplicationsRequestBuilder
     */
    public function applications(): ApplicationsRequestBuilder
    {
        return new ApplicationsRequestBuilder($this->client, $this->requestUrl . '/applications');
    }
}
