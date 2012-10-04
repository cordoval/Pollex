class CreateAnswers < ActiveRecord::Migration
  def change
    create_table :answers do |t|
      t.integer :id
      t.integer :type_id
      t.integer :poll_id
      t.integer :question_id
      t.text :value
      t.timestamps
    end
  end
end