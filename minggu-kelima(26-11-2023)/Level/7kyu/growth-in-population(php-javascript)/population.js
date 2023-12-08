function nbYear(p0, percent, aug, p) {
    for (var tahun = 0; p0 < p; tahun++) {
        p0 =  Math.floor(p0 + p0 * percent / 100 + aug);
    }
    return tahun
}
nbYear(1500, 5, 100, 5000)