
     * @param string $view
     *
     * @return string
     */
    public function viewPath($view)
    {
        $view = str_replace('.', '/', $view) . '.blade.php';
        $path = "resources/views/{$view}";
        return $path;
    }
    /**
     * Create a view directory if it does not exist.
     *
     * @param $path
     */
    public function createDir($path)
    {
        $dir = dirname($path);
        if (!file_exists($dir)) {
            mkdir($dir, 0777, true);
        }
    }
}
