<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;


class FormularioDDExport2 implements FromCollection, WithStyles, ShouldAutoSize,WithHeadings
{

    use Exportable;

    protected $exportData;

    public function __construct($exportData = null)
    {
        $this->exportData = $exportData;
    }



    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return $this->exportData;
    }

    public function headings(): array
    {
        return [
            'id',
            'Tipo de cliente',
            'Tipo de proveedor',
            'Tipo de operación',
            'Contratación directa',
            'Atracción y selección',
            'Tipo de persona',
            'Tipo de identificación',
            'Número de identificación',
            'Fecha de expedición',
            'Nit',
            'Digito de verificación',
            'Nombre completo / Razón social',
            'Fecha constitución',
            'Número empleados en la empresa',
            'Código ciiu',
            'Actividad ciiu',
            'Estrato socio económico',
            'Pais',
            'Departamento',
            'Ciudad',
            'Dirección empresa',
            'Persona contacto empresa',
            'Correo electrónico',
            'Teléfono empresa',
            'Número de celular',
            'Sociedad comercial',
            'Otra',
            'Periodicidad de pago',
            'Plazo pago',
            'Pais prestación del servicio',
            'Departamento prestación del servicio',
            'Ciudad prestación del servicio',
            'AIU negociado',
            'Ejecutivo comercial',
            'Observaciones a acuerdos comerciales',
            'Jornada laboral',
            'Rotación de personal',
            'Riesgo empresa',
            'Cuenta con junta directiva',
            'Responsable de impuesto a las ventas?',
            'Correo facturación electrónica',
            'Sucursal facturación',
            'Nombre del contador',
            'Identificación del contador',
            'Teléfono del contador',
            'Tipo de identificación del contador',
            'Nombre del tesorero',
            'Telefono del tesorero',
            'Correo electrónico del tesorero',
            'Ingreso mensual',
            'Otros ingresos',
            'Total ingresos',
            'Costos y gastos mensual',
            'Detalle de otros ingresos',
            'Reintegro de costos y gastos',
            'Activos',
            'Pasivos',
            'Patrimonio',
            'Realiza operaciones en moneda extranjera?',
            'Tipo de operaciones en moneda extranjera?',
            'Declaraciones y autorizaciones',
            'Tratamiento de datos personales',
            'Nombre accionista 1',
            'Tipo identificación',
            'Identificación',
            'Porcentaje de participación',
            'Nombre accionista 2',
            'Tipo identificación',
            'Identificación',
            'Porcentaje de participación',
            'Nombre accionista 3',
            'Tipo identificación',
            'Identificación',
            'Porcentaje de participación',
            'Nombre accionista 4',
            'Tipo identificación',
            'Identificación',
            'Porcentaje de participación',
            'Nombre accionista 5',
            'Tipo identificación',
            'Identificación',
            'Porcentaje de participación',
            'Representante legal 1',
            'Tipo de identificación',
            'Identificación',
            'Teléfono',
            'Correo electrónico',
            'Pais de expedición documento',
            'Departamento de expedición documento',
            'Ciudad de expedición documento',
            'Representante legal 2',
            'Tipo de identificación',
            'Identificación',
            'Teléfono',
            'Correo electrónico',
            'Pais de expedición documento',
            'Departamento de expedición documento',
            'Ciudad de expedición documento',
            'Representante legal 3',
            'Tipo de identificación',
            'Identificación',
            'Teléfono',
            'Correo electrónico',
            'Pais de expedición documento',
            'Departamento de expedición documento',
            'Ciudad de expedición documento',
            'Representante legal 4',
            'Tipo de identificación',
            'Identificación',
            'Teléfono',
            'Correo electrónico',
            'Pais de expedición documento',
            'Departamento de expedición documento',
            'Ciudad de expedición documento',
            'Representante legal 5',
            'Tipo de identificación',
            'Identificación',
            'Teléfono',
            'Correo electrónico',
            'Pais de expedición documento',
            'Departamento de expedición documento',
            'Ciudad de expedición documento',
            'Nombre mienbro junta 1',
            'Tipo de identificación',
            'Identificación',
            'Nombre mienbro junta 2',
            'Tipo de identificación',
            'Identificación',
            'Nombre mienbro junta 3',
            'Tipo de identificación',
            'Identificación',
            'Nombre mienbro junta 4',
            'Tipo de identificación',
            'Identificación',
            'Nombre mienbro junta 5',
            'Tipo de identificación',
            'Identificación',
            'Banco referencia bancaria 1',
            'Número de cuenta',
            'Tipo de cuenta',
            'Sucursal',
            'Telefono',
            'Contacto',
            'Banco referencia bancaria 2',
            'Número de cuenta',
            'Tipo de cuenta',
            'Sucursal',
            'Telefono',
            'Contacto',
            'Nombre referencia comercial 1',
            'contacto',
            'teléfono',
            'Nombre referencia comercial 2',
            'contacto',
            'teléfono',
            'Nombre pesonas expuestas 1',
            'Tipo de identificación',
            'Número de identificación',
            'Parentesco',
            'Nombre pesonas expuestas 2',
            'Tipo de identificación',
            'Número de identificación',
            'Parentesco',
            'Nombre pesonas expuestas 3',
            'Tipo de identificación',
            'Número de identificación',
            'Parentesco',
            'Nombre pesonas expuestas 4',
            'Tipo de identificación',
            'Número de identificación',
            'Parentesco',
            'Nombre pesonas expuestas 5',
            'Tipo de identificación',
            'Número de identificación',
            'Parentesco',
            'Nombre pesonas expuestas 6',
            'Tipo de identificación',
            'Número de identificación',
            'Parentesco',
            'Nombre pesonas expuestas 7',
            'Tipo de identificación',
            'Número de identificación',
            'Parentesco',
            'Nombre pesonas expuestas 8',
            'Tipo de identificación',
            'Número de identificación',
            'Parentesco',
            'Nombre pesonas expuestas 9',
            'Tipo de identificación',
            'Número de identificación',
            'Parentesco',
            'Nombre pesonas expuestas 10',
            'Tipo de identificación',
            'Número de identificación',
            'Parentesco',

        ];
    }
    

    public function styles(Worksheet $sheet)
    {
        return [
            1 => ['font' => ['bold' => true, 'size' => 12]],
        ];
    }

}