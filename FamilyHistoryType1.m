data = load('FamilyHistoryType1.txt');
X = data(:,[1:4]);
y = data(:,5);
[m,n] = size(X);
X = [ones(m,1) , X]
initial_theta = zeros(n + 1, 1);
[cost, grad] = costFunction(initial_theta, X, y);
options = optimset('GradObj', 'on', 'MaxIter', 40000);
[theta, cost] = fminunc(@(t)(costFunction(t, X, y)), initial_theta, options);
p = predict(theta, X);
fprintf('Train Accuracy: %f\n', mean(double(p == y)) * 100);