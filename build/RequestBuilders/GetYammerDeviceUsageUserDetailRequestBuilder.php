<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;

/**
 * Request builder for getYammerDeviceUsageUserDetail(date={date})
 */
class GetYammerDeviceUsageUserDetailRequestBuilder extends BaseRequestBuilder
{
    /**
     * Invoke function getYammerDeviceUsageUserDetail
     * @return \stdClass
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(): \stdClass
    {
        $response = $this->client->get($this->requestUrl, []);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to \stdClass
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
        
        return (object)$data;
    }
}
