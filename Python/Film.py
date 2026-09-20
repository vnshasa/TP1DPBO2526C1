class Film:
    def __init__(self, id_film: str, judul: str, genre: str, durasi: int, gambar: str):
        self._id = str(id_film)
        self._judul = str(judul)
        self._genre = str(genre)
        self._durasi = int(durasi)
        self._gambar = str(gambar)

    # Getters
    def getId(self) -> str:
        return self._id
    def getJudul(self) -> str:
        return self._judul
    def getGenre(self) -> str:
        return self._genre
    def getDurasi(self) -> int:
        return self._durasi
    def getGambar(self) -> str:
        return self._gambar

    # Setters
    def setJudul(self, judul: str) -> None:
        self._judul = str(judul)
    def setGenre(self, genre: str) -> None:
        self._genre = str(genre)
    def setDurasi(self, durasi: int) -> None:
        self._durasi = int(durasi)
    def setGambar(self, gambar: str) -> None:
        self._gambar = str(gambar)