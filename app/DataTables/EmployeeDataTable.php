<?php

namespace App\DataTables;

use App\Models\Divisi;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class EmployeeDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addIndexColumn()
            ->addColumn('action', function (Employee $data) {
                return view('admin.employee.action', compact('data'));
            })
            ->editColumn('foto', function (Employee $data)  {
                return $data->foto != null ? '<img src="'.asset($data->foto).'" width="100px">' : '';
            })
            ->editColumn('gender', function (Employee $data) {
                if ($data->gender == 'Male') {
                    return '<span class="badge bg-primary">' . 'Laki-laki' . '</span>';
                }
                return '<span class="badge bg-danger">' . 'Perempuan' . '</span>';
            })
            ->addColumn('divisi', function (Employee $employee) {
                return $employee->divisi->divisi;
            })
            ->rawColumns(['foto','gender'])
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Employee $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('employee-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    //->dom('Bfrtip')
                    ->orderBy(1)
                    ->selectStyleSingle()
                    ->buttons([
                        Button::make('excel'),
                        Button::make('csv'),
                        Button::make('pdf'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::computed('DT_RowIndex')
                ->title('No')
                ->searchable(false)
                ->orderable(false)
                ->addClass('text-center'),
            Column::make('foto'),
            Column::make('name')->title('Nama'),
            Column::make('nip'),
            Column::make('gender')->title('Jenis Kelamin')->addClass('text-center'),
            Column::make('divisi')->title('Divisi')->addClass('text-center'),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->addClass('text-center')
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Employee_' . date('YmdHis');
    }
}
