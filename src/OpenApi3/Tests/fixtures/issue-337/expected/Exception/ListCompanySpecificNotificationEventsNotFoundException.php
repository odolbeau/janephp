<?php

namespace CreditSafe\API\Exception;

class ListCompanySpecificNotificationEventsNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('', 404);
    }
}