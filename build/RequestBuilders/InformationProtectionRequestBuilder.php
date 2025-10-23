<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\InformationProtection;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BitlockerRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ThreatAssessmentRequestsRequestBuilder;

/**
 * Request builder for informationProtection
 */
class InformationProtectionRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get informationProtection
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return InformationProtection
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): InformationProtection
    {
        $queryParams = [];
        if ($select !== null) {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null) {
            $queryParams['$expand'] = implode(',', $expand);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to InformationProtection
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
        return new InformationProtection($data);
    }
    /**
     * Update informationProtection
     * @param InformationProtection $body Request body
     * @return InformationProtection
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(InformationProtection $body): InformationProtection
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to InformationProtection
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
        return new InformationProtection($data);
    }
    /**
     * Navigate to bitlocker
     *
     * @return BitlockerRequestBuilder
     */
    public function bitlocker(): BitlockerRequestBuilder
    {
        return new BitlockerRequestBuilder($this->client, $this->requestUrl . '/bitlocker');
    }
    /**
     * Navigate to threatAssessmentRequests
     *
     * @return ThreatAssessmentRequestsRequestBuilder
     */
    public function threatAssessmentRequests(): ThreatAssessmentRequestsRequestBuilder
    {
        return new ThreatAssessmentRequestsRequestBuilder($this->client, $this->requestUrl . '/threatAssessmentRequests');
    }
}
