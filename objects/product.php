<?php
class Product{
 
    // database connection and table name
    private $conn;
    private $table_name = "produk";
 
    // object properties
    public $kode;
    public $nama;
    public $deskripsi;
    public $harga;
    public $kode_kategori;
    public $nama_kategori;
	public $expired;
	public $stok;
 
    // read products
	function read(){
	 
		// select all query
		$query = "SELECT
					k.nama as nama_kategori, p.kode, p.nama, p.deskripsi, p.harga, p.kategori, p.stok, k.kode as kode_kategori
				FROM
					" . $this->table_name . " p
					LEFT JOIN
						kategori k
							ON p.kategori = k.kode
				ORDER BY
					p.stok DESC";
	 
		// prepare query statement
		$stmt = $this->conn->prepare($query);
	 
		// execute query
		$stmt->execute();
	 
		return $stmt;
	}
	
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }
}
?>
