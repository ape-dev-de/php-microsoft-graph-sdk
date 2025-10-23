<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Group;

/**
 * Request builder for assignLicense
 */
class AssignLicenseRequestBuilder extends BaseRequestBuilder
{
    /**
     * Invoke action assignLicense
     * @param Group|\stdClass $body Request body
     * @return Group|\stdClass
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(Group|\stdClass $body): Group|\stdClass
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->post($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to Group|\stdClass
     */
    private function deserializePost(string $body): mixed
    {
        if (empty($body)) {
            return null;
        }
        
        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }
        
        // Single object
        return new Group($data);
    }
}
