const ctx = document.getElementById('balanceChart').getContext('2d');

// Пример данных для графика
const data = {
    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
    datasets: [
        {
            label: 'Income',
            data: [2000, 4000, 15000, 3000, 10000, 2000],
            backgroundColor: 'rgba(54, 162, 235, 0.5)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1
        },
        {
            label: 'Expenses',
            data: [1000, 3000, 8000, 2000, 7000, 1000],
            backgroundColor: 'rgba(255, 99, 132, 0.5)',
            borderColor: 'rgba(255, 99, 132, 1)',
            borderWidth: 1
        }
    ]
};

const options = {
    responsive: true,
    plugins: {
        legend: {
            position: 'top',
        },
        title: {
            display: true,
            text: 'Monthly Income & Expenses'
        }
    },
    scales: {
        y: {
            beginAtZero: true,
            ticks: {
                callback: function(value) {
                    return value + 'k'; // Добавляет "k" к значениям
                }
            }
        }
    }
};

new Chart(ctx, {
    type: 'bar',
    data: data,
    options: options
});
