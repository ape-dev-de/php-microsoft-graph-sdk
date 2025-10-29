<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\InformationProtection;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\InformationProtection;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\InformationProtection\BitlockerRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\InformationProtection\ThreatAssessmentRequestsRequestBuilder;

/**
 * Request builder for /informationProtection
 */
class InformationProtectionRequestBuilder extends RootBaseRequestBuilder
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
        // Get raw data from model
        $bodyData = method_exists($body, 'getRaw') ? $body->getRaw() : json_encode(json_decode($body, true));
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
