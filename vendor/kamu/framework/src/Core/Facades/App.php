<?php

namespace Core\Facades;

/**
 * Jadi satu objek aplikasi yang bisa digunakan di semua tempat.
 *
 * @class App
 * @package \Core\Facades
 */
final class App
{
    /**
     * Simpan jadi objek tunggal.
     *
     * @var Application $app
     */
    public static $app;

    /**
     * Bikin objek untuk pertama kalinya.
     *
     * @param Application $app
     * @return Application
     */
    public static function &new(Application $app): Application
    {
        static::$app = $app;
        return static::get();
    }

    /**
     * Ambil objek yang sudah dibuat.
     *
     * @return Application
     */
    public static function &get(): Application
    {
        return static::$app;
    }
}
