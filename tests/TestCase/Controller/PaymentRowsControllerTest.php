<?php
namespace App\Test\TestCase\Controller;

use App\Controller\PaymentRowsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\PaymentRowsController Test Case
 */
class PaymentRowsControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.payment_rows',
        'app.receipts',
        'app.vouchers_references',
        'app.account_groups',
        'app.account_categories',
        'app.account_first_subgroups',
        'app.account_second_subgroups',
        'app.ledger_accounts',
        'app.customers',
        'app.districts',
        'app.company_groups',
        'app.companies',
        'app.item_used_by_companies',
        'app.company_banks',
        'app.quotations',
        'app.financial_years',
        'app.financial_months',
        'app.receipt_vouchers',
        'app.ledgers',
        'app.reference_details',
        'app.payment_vouchers',
        'app.invoice_bookings',
        'app.grns',
        'app.purchase_order_rows',
        'app.purchase_orders',
        'app.items',
        'app.item_categories',
        'app.item_groups',
        'app.item_sub_groups',
        'app.units',
        'app.sources',
        'app.item_sources',
        'app.item_companies',
        'app.invoice_rows',
        'app.item_serialnumbers',
        'app.inventory_vouchers',
        'app.item_ledgers',
        'app.vendors',
        'app.vendor_contact_persons',
        'app.vendor_companies',
        'app.voucher_ledger_accounts',
        'app.invoices',
        'app.customer_groups',
        'app.reference_balances',
        'app.sales_orders',
        'app.filenames',
        'app.carrier',
        'app.customer_address',
        'app.transporters',
        'app.courier',
        'app.terms_conditions',
        'app.tax_details',
        'app.employees',
        'app.departments',
        'app.designations',
        'app.employee_contact_persons',
        'app.employee_companies',
        'app.creator',
        'app.editor',
        'app.sales_order_rows',
        'app.sale_taxes',
        'app.sale_tax_companies',
        'app.job_card_rows',
        'app.job_cards',
        'app.inventory_voucher_rows',
        'app.invoice_breakups',
        'app.item_serial_numbers',
        'app.account_references',
        'app.challans',
        'app.challan_rows',
        'app.quotation_rows',
        'app.material_indent_rows',
        'app.material_indents',
        'app.grn_rows',
        'app.invoice_booking_rows',
        'app.paid_tos',
        'app.bank_cashes',
        'app.payment_breakups',
        'app.credit_notes',
        'app.purchase_accs',
        'app.parties',
        'app.received_froms',
        'app.receipt_breakups',
        'app.quotation_close_reasons',
        'app.customer_contacts',
        'app.customer_companies',
        'app.customer_segs',
        'app.receipt_rows'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
