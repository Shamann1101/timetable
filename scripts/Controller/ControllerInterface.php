<?php

namespace Controller;

/**
 * Интерфейс контроллера
 */
interface ControllerInterface
{

    /**
     * Метод парсит список станций следования поезда
     * @param string $uid код поезда
     * @param string $date дата расписания
     * @return array
     */
    public function train($uid, $date)

    /**
     * Метод парсит расписания поездов по станции
     *
     * @param string $station код станции
     * @param string $date дата расписания
     * @return array
     */
    public function a($station, $date)

    /**
     * Метод парсит расписания поездов из пункта А в пункт В
     *
     * @param stringFrom $station код станции отправления
     * @param stringTo $station код станции назначения
     * @param string $date дата расписания
     * @return array
     */
    public function ab($from, $to, $date)

    /**
     * Стандартный метод вызова контроллера
     */
    public function run();
}
