d = csvread('C:\Users\user\Desktop\Final Project Data\Model Training Data\AutoAntibodiesPrediction.csv');
X = d(:,[1:11]);
y = d(:,12);
[m,n] = size(X);
X = [ones(m,1) , X]
initial_theta = zeros(n + 1, 1);
[cost, grad] = costFunction(initial_theta, X, y);
options = optimset('GradObj', 'on', 'MaxIter', 40000);
[theta, cost] = fminunc(@(t)(costFunction(t, X, y)), initial_theta, options);
p = predict(theta, X);
fprintf('Train Accuracy: %f\n', mean(double(p == y)) * 100);