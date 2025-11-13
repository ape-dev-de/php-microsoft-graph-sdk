<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;

/**
 * Request builder for /reports/getSkypeForBusinessParticipantActivityUserCounts(period='{period}')
 */
class GetSkypeForBusinessParticipantActivityUserCountsRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke function getSkypeForBusinessParticipantActivityUserCounts
     * @return \stdClass|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(): \stdClass|null
    {
        $response = $this->client->get($this->requestUrl, []);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to \stdClass|null
     */
    private function deserializeGet(string $body): \stdClass|null    {
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
