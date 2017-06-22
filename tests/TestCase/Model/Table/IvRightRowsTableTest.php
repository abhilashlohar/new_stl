<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\IvRightRowsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\IvRightRowsTable Test Case
 */
class IvRightRowsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\IvRightRowsTable
     */
    public $IvRightRows;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.iv_right_rows',
        'app.iv_left_rows',
        'app.ivs',
        'app.invoices',
        'app.customer_groups',
        'app.customers',
        'app.ledger_accounts',
        'app.account_second_subgroups',
        'app.account_first_subgroups',
        'app.account_groups',
        'app.account_categories',
        'app.ledgers',
        'app.reference_details',
        'app.receipt_vouchers',
        'app.vouchers_references',
        'app.voucher_ledger_accounts',
        'app.financial_years',
        'app.financial_months',
        'app.companies',
        'app.company_groups',
        'app.item_used_by_companies',
        'app.company_banks',
        'app.quotations',
        'app.employees',
        'app.departments',
        'app.designations',
        'app.employee_contact_persons',
        'app.sales_orders',
        'app.filenames',
        'app.carrier',
        'app.customer_address',
        'app.districts',
        'app.transporters',
        'app.courier',
        'app.terms_conditions',
        'app.tax_details',
        'app.creator',
        'app.logins',
        'app.user_rights',
        'app.pages',
        'app.user_logs',
        'app.request_leaves',
        'app.leave_types',
        'app.payments',
        'app.reference_balances',
        'app.bank_cashes',
        'app.received_froms',
        'app.payment_rows',
        'app.receipts',
        'app.receipt_rows',
        'app.approve_leaves',
        'app.employee_companies',
        'app.editor',
        'app.sales_order_rows',
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
        'app.grns',
        'app.purchase_order_rows',
        'app.purchase_orders',
        'app.material_indent_rows',
        'app.material_indents',
        'app.item_ledgers',
        'app.inventory_vouchers',
        'app.job_cards',
        'app.job_card_rows',
        'app.inventory_voucher_rows',
        'app.item_serial_numbers',
        'app.inventory_transfer_vouchers',
        'app.inventory_transfer_voucher_rows',
        'app.purchase_returns',
        'app.invoice_bookings',
        'app.invoice_booking_rows',
        'app.grn_rows',
        'app.vendors',
        'app.vendor_contact_persons',
        'app.vendor_companies',
        'app.account_references',
        'app.purchase_return_rows',
        'app.challans',
        'app.challan_rows',
        'app.sale_returns',
        'app.sale_taxes',
        'app.sale_tax_companies',
        'app.sale_return_rows',
        'app.quotation_rows',
        'app.quotation_close_reasons',
        'app.customer_contacts',
        'app.customer_companies',
        'app.receipt_breakups',
        'app.payment_vouchers',
        'app.paid_tos',
        'app.payment_breakups',
        'app.credit_notes',
        'app.customer_suppilers',
        'app.heads',
        'app.credit_notes_rows',
        'app.journal_vouchers',
        'app.journal_voucher_rows',
        'app.debit_notes',
        'app.debit_notes_rows',
        'app.nppayments',
        'app.nppayment_rows',
        'app.contra_vouchers',
        'app.contra_voucher_rows',
        'app.customer_segs',
        'app.invoice_breakups',
        'app.iv_left_serial_numbers',
        'app.iv_right_serial_numbers'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('IvRightRows') ? [] : ['className' => 'App\Model\Table\IvRightRowsTable'];
        $this->IvRightRows = TableRegistry::get('IvRightRows', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->IvRightRows);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
