<?php

class Application {
    private static ?Application $instance = null;
    private array $services = [];
    private array $controllers = [];

    private function __construct() {
        $this->registerServices();
        $this->registerControllers();
    }

    public static function getInstance(): Application {
        if (self::$instance === null) {
            self::$instance = new Application();
        }
        return self::$instance;
    }

    private function registerServices(): void {
        $this->services[IUserService::class] = new UserService(new UserRepository());
        $this->services[IAccountService::class] = new AccountService(new AccountRepository());
        $this->services[ITransactionService::class] = new TransactionService(
            new TransactionRepository(),
            $this->getDependency(IBudgetService::class),
            $this->getDependency(IAccountService::class)
        );
        $this->services[IBudgetService::class] = new BudgetService(new BudgetRepository());
        $this->services[IAnalyticsService::class] = new AnalyticsService(new AnalyticsRepository());
    }

    private function registerControllers(): void {
        $this->controllers[IUserController::class] = new UserController(
            $this->getDependency(IUserService::class)
        );
        $this->controllers[IAccountController::class] = new AccountController(
            $this->getDependency(IAccountService::class)
        );
        $this->controllers[ITransactionController::class] = new TransactionController(
            $this->getDependency(ITransactionService::class),
            $this->getDependency(IBudgetService::class)
        );
        $this->controllers[IBudgetController::class] = new BudgetController(
            $this->getDependency(IBudgetService::class)
        );
        $this->controllers[IAnalyticsController::class] = new AnalyticsController(
            $this->getDependency(IAnalyticsService::class)
        );
    }

    public function getDependency(string $type): object {
        if (isset($this->services[$type])) {
            return $this->services[$type];
        }
        if (isset($this->controllers[$type])) {
            return $this->controllers[$type];
        }
        throw new Exception("No dependency found for type: $type");
    }
}
