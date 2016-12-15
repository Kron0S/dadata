<?php

namespace Dadata\Response;

class Vehicle extends AbstractResponse
{
    /**
     * Исходное значение распознано уверенно
     */
    const QC_OK = 0;

    /**
     * Исходное значение пустое или заведомо «мусорное»
     */
    const QC_EMPTY = 2;

    /**
     * Исходное значение распознано с допущениями или не распознано
     */
    const QC_INVALID = 1;

    /**
     * @var string Исходное значение
     */
    public $source;

    /**
     * @var string Стандартизованное значение
     */
    public $result;

    /**
     * @var string Марка
     */
    public $brand;

    /**
     * @var string Модель
     */
    public $model;

    /**
     * @var string Код проверки
     */
    public $qc;

    public function __toString()
    {
        return (string) $this->result;
    }
}
