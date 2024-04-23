
function toggleInputFields(shape) {
    var balokInputs = document.getElementById('balokInputs');
    var kubusInputs = document.getElementById('kubusInputs');
    var tabungInputs = document.getElementById('TabungInputs');
    var balokCheckbox = document.getElementById('balokCB');
    var kubusCheckbox = document.getElementById('kubusCB');
    var tabungCheckbox = document.getElementById('TabungCB');
    var baloklpCheckbox = document.getElementById('balokCBlp');
    var kubuslpCheckbox = document.getElementById('kubusCBlp');
    var tabunglpCheckbox = document.getElementById('TabungCBlp');
    
  
    if (shape === 'balok') {
        balokInputs.style.display = 'block';
        kubusInputs.style.display = 'none';
        tabungInputs.style.display = 'none';
        kubusCheckbox.checked = false;
        tabungCheckbox.checked = false;
        kubuslpCheckbox.checked = false;
        tabunglpCheckbox.checked = false;
        baloklpCheckbox.checked = false;
    } else if (shape === 'kubus') {
        balokInputs.style.display = 'none';
        kubusInputs.style.display = 'block';
        tabungInputs.style.display = 'none';
        balokCheckbox.checked = false;
        tabungCheckbox.checked = false;
        kubuslpCheckbox.checked = false;
        tabunglpCheckbox.checked = false;
        baloklpCheckbox.checked = false;
    } else if (shape === 'Tabung') {
        balokInputs.style.display = 'none';
        kubusInputs.style.display = 'none';
        tabungInputs.style.display = 'block';
        balokCheckbox.checked = false;
        kubusCheckbox.checked = false;
        kubuslpCheckbox.checked = false;
        tabunglpCheckbox.checked = false;
        baloklpCheckbox.checked = false;
    } else if (shape === 'Tabunglp') {
        balokInputs.style.display = 'none';
        kubusInputs.style.display = 'none';
        tabungInputs.style.display = 'block';
        balokCheckbox.checked = false;
        kubusCheckbox.checked = false;
        kubuslpCheckbox.checked = false;
        tabungCheckbox.checked = false;
        baloklpCheckbox.checked = false;
    } else if (shape === 'kubuslp') {
        balokInputs.style.display = 'none';
        kubusInputs.style.display = 'block';
        tabungInputs.style.display = 'none';
        balokCheckbox.checked = false;
        tabungCheckbox.checked = false;
        kubusCheckbox.checked = false;
        tabunglpCheckbox.checked = false;
        baloklpCheckbox.checked = false;
    } else if (shape === 'baloklp') {
        balokInputs.style.display = 'block';
        kubusInputs.style.display = 'none';
        tabungInputs.style.display = 'none';
        kubusCheckbox.checked = false;
        tabungCheckbox.checked = false;
        kubuslpCheckbox.checked = false;
        tabunglpCheckbox.checked = false;
        balokCheckbox.checked = false;
    }
  }
  
  function hitung() {
    var hasilField = document.getElementById('hasil');
    var balokCheckbox = document.getElementById('balokCB');
    var kubusCheckbox = document.getElementById('kubusCB');
    var tabungCheckbox = document.getElementById('TabungCB');
    var baloklpCheckbox = document.getElementById('balokCBlp');
    var kubuslpCheckbox = document.getElementById('kubusCBlp');
    var tabunglpCheckbox = document.getElementById('TabungCBlp');
  
    if (balokCheckbox.checked) {
        var panjang = parseFloat(document.getElementById('panjang').value);
        var lebar = parseFloat(document.getElementById('lebar').value);
        var tinggi = parseFloat(document.getElementById('tinggi').value);
        var volume = panjang * lebar * tinggi;
        hasilField.value = volume;
    } else if (kubusCheckbox.checked) {
        var sisi = parseFloat(document.getElementById('sisi').value);
        var volume = sisi * sisi * sisi;
        hasilField.value = volume;
    } else if (tabungCheckbox.checked) {
        var jari = parseFloat(document.getElementById('r').value);
        var tinggi = parseFloat(document.getElementById('tinggi_tabung').value);
        var volume = Math.PI * (jari * jari) * tinggi;
        hasilField.value = volume;
    } else if (baloklpCheckbox.checked) {
        var panjang = parseFloat(document.getElementById('panjang').value);
        var lebar = parseFloat(document.getElementById('lebar').value);
        var tinggi = parseFloat(document.getElementById('tinggi').value);
        var volume = 2*((panjang * lebar)+(panjang * tinggi)+(lebar * tinggi));
        hasilField.value = volume;
    } else if (kubuslpCheckbox.checked) {
        var sisi = parseFloat(document.getElementById('sisi').value);
        var volume = 6 *(sisi * sisi);
        hasilField.value = volume;
    } else if (tabunglpCheckbox.checked) {
        var jari = parseFloat(document.getElementById('r').value);
        var tinggi = parseFloat(document.getElementById('tinggi_tabung').value);
        var volume = 2 * Math.PI * jari*(jari + tinggi);
        hasilField.value = volume;
    } else {
        hasilField.value = "Pilih salah satu .";
    }
  }
  