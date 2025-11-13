<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\BookingBusinesses\CalendarView;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;

/**
 * Request builder for /solutions/bookingBusinesses/{bookingBusiness-id}/calendarView/$count
 */
class CountRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get the number of the resource
     *
     * @param string $start The start date and time of the time range, represented in ISO 8601 format. For example, 2019-11-08T19:00:00-08:00
     * @param string $end The end date and time of the time range, represented in ISO 8601 format. For example, 2019-11-08T20:00:00-08:00
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @return int|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(string $start, string $end, ?string $search = null, ?string $filter = null): int|null
    {
        $queryParams = [];
        if ($start !== null && $start !== '') {
            $queryParams['start'] = $start;
        }
        if ($end !== null && $end !== '') {
            $queryParams['end'] = $end;
        }
        if ($search !== null && $search !== '') {
            $queryParams['$search'] = $search;
        }
        if ($filter !== null && $filter !== '') {
            $queryParams['$filter'] = $filter;
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to int|null
     */
    private function deserializeGet(string $body): int|null    {
        if (empty($body)) {
            return null;
        }

        return (int)$body;
    }
}
