<?php

namespace App\Enums;

enum QuotationStatus: int
{
    case PENDING = 0;
    case SENT = 1;
    case CANCELED = 2;

    public function label(): string
    {
        return match ($this) {
            self::PENDING => __('Ditunda'),
            self::SENT => __('Pengiriman'),
            self::CANCELED => __('Pembatalan'),
        };
    }
}
